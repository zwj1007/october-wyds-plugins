<?php namespace Buuug7\User\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use October\Rain\Exception\ValidationException;
use RainLab\User\Models\Settings as UserSettings;
use Auth;
use Flash;
use Redirect;
use Mail;
use Lang;
use Request;
use Session;

class BindQQ extends ComponentBase
{
    public $accessToken;
    public $openId;
    public $qqUser;


    public function componentDetails()
    {
        return [
            'name' => 'BindQQ Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->loadAuthInfo();
        /*
         * Activation code supplied
         * */
        $routeParameter = $this->property('paramCode');

        if ($activationCode = $this->param($routeParameter)) {
            $this->onActivate($activationCode);
        }
    }

    public function loadAuthInfo()
    {
        $this->accessToken = Session::pull('accessToken');
        $this->openId = Session::pull('openId');
        $this->qqUser = Session::pull('qqUser');
    }

    public function onBind()
    {
        $data = post();

        $validate = Validator::make($data, [
            'email' => 'required|between:6,255|email|unique:users',
        ]);

        if ($validate->fails()) {
            throw new ValidationException($validate);
        }

        $data['password'] = Str::random(6);
        $data['password_confirmation'] = $data['password'];
        $data['name'] = 'test';

        /*
         *  Register user
         * */
        Event::fire('rainlab.user.beforeRegister', [&$data]);

        $requireActivation = UserSettings::get('require_activation', true);
        $automaticActivation = UserSettings::get('activate_mode') == UserSettings::ACTIVATE_AUTO;
        $userActivation = UserSettings::get('activate_mode') == UserSettings::ACTIVATE_USER;

        $user = Auth::register($data, $automaticActivation);

        Event::fire('rainlab.user.register', [$user, $data]);

        if ($userActivation) {
            $this->sendActivationEmail($user);

            Flash::success(Lang::get(/*An activation email has been sent to your email address.*/
                'rainlab.user::lang.account.activation_email_sent'));
        }

        /*
      * Automatically activated or not required, log the user in
      */
        if ($automaticActivation || !$requireActivation) {
            Auth::login($user);
        }

        return Redirect::to('/');

    }

    protected function sendActivationEmail($user)
    {
        $code = implode('!', [$user->id, $user->getActivationCode()]);
        $link = $this->currentPageUrl([
            $this->property('paramCode') => $code
        ]);

        $data = [
            'name' => $user->name,
            'link' => $link,
            'code' => $code
        ];

        Mail::send('buuug7.user::mail.activate', $data, function ($message) use ($user) {
            $message->to($user->email, $user->name);
        });
    }

    /**
     * Activate the user
     * @param  string $code Activation code
     */
    public function onActivate($code = null)
    {
        try {
            $code = post('code', $code);

            /*
             * Break up the code parts
             */
            $parts = explode('!', $code);
            if (count($parts) != 2) {
                throw new ValidationException(['code' => Lang::get(/*Invalid activation code supplied.*/
                    'rainlab.user::lang.account.invalid_activation_code')]);
            }

            list($userId, $code) = $parts;

            if (!strlen(trim($userId)) || !($user = Auth::findUserById($userId))) {
                throw new ApplicationException(Lang::get(/*A user was not found with the given credentials.*/
                    'rainlab.user::lang.account.invalid_user'));
            }

            if (!$user->attemptActivation($code)) {
                throw new ValidationException(['code' => Lang::get(/*Invalid activation code supplied.*/
                    'rainlab.user::lang.account.invalid_activation_code')]);
            }

            Flash::success(Lang::get(/*Successfully activated your account.*/
                'rainlab.user::lang.account.success_activation'));

            /*
             * Sign in the user
             */
            Auth::login($user);

        } catch (Exception $ex) {
            if (Request::ajax()) throw $ex;
            else Flash::error($ex->getMessage());
        }
    }


}
