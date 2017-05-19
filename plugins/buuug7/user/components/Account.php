<?php namespace Buuug7\User\Components;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use RainLab\User\Facades\Auth;
use Flash;
use Lang;

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

    public function onUpdate(){
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

    public function onBindPhone(){

    }

    public function onGetSmsCode(){
        $phoneNum=post('phoneNum');
        if (!$phoneNum){
            Flash::error('请输入合适的电话号码');
            return ;
        }
        Log::info($phoneNum);
        return ;

        //TODO 
        $http=new Client();
        $key='23837586';
        $secret='1a3c0ba05ce74ecea37b78b5a8db8c66';
        $url='http://gw.api.taobao.com/router/rest';
        $response=$http->get($url,[
            'query' => [
                'app_key' => $key,
                'format' => 'json',
            ],
        ]);

        Log::info($response->getBody());
    }

}
