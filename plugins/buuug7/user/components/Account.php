<?php namespace Buuug7\User\Components;

use Lang;
use Auth;
use Mail;
use Event;
use Flash;
use Input;
use Request;
use Redirect;
use Validator;
use ValidationException;
use ApplicationException;
use RainLab\User\Models\Settings as UserSettings;
use Exception;
use Buuug7\Statistics\Models\StatisticOne;


class Account extends \RainLab\User\Components\Account
{


    public function init()
    {
        parent::init();
        $user = Auth::getUser();
        if ($user) {
            $component = $this->addComponent(
                'NetSTI\Uploader\Components\ImageUploader',
                'imageUploader',
                [
                    'modelClass' => 'RainLab\User\Models\User',
                    'modelKeyColumn' => 'avatar',
                    'deferredBinding' => false,
                ]
            );

            $component->bindModel('avatar', $user);
        }
    }

    /**
     * Override default onRegister method
     * only add custom validation message
     */
    public function onRegister()
    {
        try {
            if (!$this->canRegister) {
                throw new ApplicationException(Lang::get('rainlab.user::lang.account.registration_disabled'));
            }
            /*
             * Validate input
             */
            $data = post();
            if (!array_key_exists('password_confirmation', $data)) {
                $data['password_confirmation'] = post('password');
            }
            $rules = [
                'name' => 'required',

                'email' => 'required|between:3,64|email|unique:users',
                'password' => 'required|between:4,255|confirmed'
            ];
            if ($this->loginAttribute() == UserSettings::LOGIN_USERNAME) {
                $rules['username'] = 'required|between:2,255';
            }
            $validation = Validator::make($data, $rules, [
                'required' => '请输入:attribute',
                'confirmed' => '密码确认不一致',

            ], [
                'name' => '用户名',
                'email' => '电子邮箱',
                'password' => '密码',
            ]);
            if ($validation->fails()) {
                throw new ValidationException($validation);
            }
            /*
             * Register user
             */
            Event::fire('rainlab.user.beforeRegister', [&$data]);

            $requireActivation = UserSettings::get('require_activation', true);
            $automaticActivation = UserSettings::get('activate_mode') == UserSettings::ACTIVATE_AUTO;
            $userActivation = UserSettings::get('activate_mode') == UserSettings::ACTIVATE_USER;
            $user = Auth::register($data, $automaticActivation);

            Event::fire('rainlab.user.register', [$user, $data]);
            /*
             * Activation is by the user, send the email
             */
            if ($userActivation) {
                $this->sendActivationEmail($user);
                Flash::success(Lang::get('rainlab.user::lang.account.activation_email_sent'));
            }
            /*
             * Automatically activated or not required, log the user in
             */
            if ($automaticActivation || !$requireActivation) {
                Auth::login($user);
            }
            /*
             * Redirect to the intended page after successful sign in
             */
            $redirectUrl = $this->pageUrl($this->property('redirect'))
                ?: $this->property('redirect');
            if ($redirectUrl = post('redirect', $redirectUrl)) {
                return Redirect::intended($redirectUrl);
            }
        } catch (Exception $ex) {
            if (Request::ajax()) throw $ex;
            else Flash::error($ex->getMessage());
        }
    }


    /**
     * Override default Signin method
     * Sign in the user
     */
    public function onSignin()
    {
        try {
            /*
             * Validate input
             */
            $data = post();
            $rules = [];
            $rules['login'] = $this->loginAttribute() == UserSettings::LOGIN_USERNAME
                ? 'required|between:2,255'
                : 'required|email|between:6,255';
            $rules['password'] = 'required|between:4,255';
            if (!array_key_exists('login', $data)) {
                $data['login'] = post('username', post('email'));
            }
            $validation = Validator::make($data, $rules, [
                'required' => '请输入:attribute',
            ], [
                'login' => '电子邮箱',
                'password' => '密码',
            ]);
            if ($validation->fails()) {
                throw new ValidationException($validation);
            }
            /*
             * Authenticate user
             */
            $credentials = [
                'login' => array_get($data, 'login'),
                'password' => array_get($data, 'password')
            ];
            Event::fire('rainlab.user.beforeAuthenticate', [$this, $credentials]);
            $user = Auth::authenticate($credentials, true);
            /*
             * Redirect to the intended page after successful sign in
             */
            Flash::success('登陆成功!');
            $redirectUrl = $this->pageUrl($this->property('redirect'))
                ?: $this->property('redirect');
            if ($redirectUrl = input('redirect', $redirectUrl)) {
                return Redirect::intended($redirectUrl);
            }
        } catch (Exception $ex) {
            if (Request::ajax()) throw $ex;
            else Flash::error($ex->getMessage());
        }
    }

    public function onUpdate()
    {
        if (!$user = $this->user()) {
            return;
        }

        $user->fill(post());
        $user->save();

        /*
         * Password has changed, reauthenticate the user
         */
        if (strlen(post('password'))) {
            Auth::login($user->reload(), true);
        }

        Flash::success(post('flash', Lang::get('rainlab.user::lang.account.success_saved')));

        /*
         * Redirect
         */
        if ($redirect = $this->makeRedirection()) {
            return $redirect;
        }
    }

    public function onAddStatistic()
    {
        if (!Auth::check()) {
            return;
        }

        $total = $this->getStatisticTotal(post('buy'), post('sales'));

        // make sure poverty_total  less than buy+sales
        if (post('buy') + post('sales') < post('poverty_total')) {
            Flash::error('贫困电商交易额不能大于购进和外销的和');
            return Redirect::refresh();
        }

        StatisticOne::create([
            'buy' => post('buy'),
            'sales' => post('sales'),
            'poverty_total' => post('poverty_total'),
            'total' => $total,
            'published_at' => post('published_at'),
            'user_id' => post('user_id'),
        ]);
        Flash::success('统计数据提交成功');
    }

    function getStatisticTotal($buy, $sales)
    {
        if (!$buy) {
            $buy = 0;
        }
        if (!$sales) {
            $sales = 0;
        }
        return $buy + $sales;
    }

}
