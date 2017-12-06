<?php

use Illuminate\Support\Facades\Route;
use Buuug7\User\Models\User;
use RainLab\User\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use October\Rain\Support\Facades\Config;
use Illuminate\Support\Str;


Route::middleware(['web'])->group(function () {
    //
    // login with tianqi user center
    //

    // redirect to tianqi login
    Route::get('/login/tianqi', function () {
        $query = http_build_query([
            'client_id' => Config::get('buuug7.user::tianqi.client_id'),
            'redirect_uri' => Config::get('buuug7.user::tianqi.redirect_uri'),
            'response_type' => 'code',
            'scope' => '',
        ]);

        $authorize_uri = 'http://7.jq2.com/oauth/authorize?' . $query;
        return Redirect::to($authorize_uri);
    });

    // handle tianqi callback
    Route::get('/login/tianqi/callback', function () {
        $code = input('code');
        $accessToken = User::getTianQiUserToken($code);
        $tianQiUser = User::getTianQiUserByToken($accessToken);

        if (!User::where('tianqi_id', $tianQiUser->id)->first()) {
            if (User::where('email', $tianQiUser->email)->first()) {
                $user = User::where('email', $tianQiUser->email)->first();
                $user->tianqi_id = $tianQiUser->id;
                $user->social_avatar = $tianQiUser->avatar_url;
                $user->save();
                Auth::login($user);
            } else {
                $password = bcrypt(Str::random(6));
                $user = Auth::register([
                    'name' => $tianQiUser->name,
                    'email' => $tianQiUser->email,
                    'password' => $password,
                    'password_confirmation' => $password,
                ], true);
                $user->tianqi_id = $tianQiUser->id;
                $user->social_avatar = $tianQiUser->avatar_url;
                $user->save();
                Auth::login($user);
            }
        } else {
            $userInstance = User::where('tianqi_id', $tianQiUser->id)->firstOrFail();
            // synchronization user avatar
            $userInstance->social_avatar = $tianQiUser->avatar_url;
            $userInstance->save();
            Auth::login($userInstance, true);

        }
        return Redirect::to('/user/center/account');
    });


    //
    // login with github
    //

    // redirect to github login
    Route::get('/login/github', function () {
        $query = http_build_query([
            'client_id' => Config::get('buuug7.user::github.client_id'),
            'redirect_uri' => Config::get('buuug7.user::github.redirect_uri'),
            'scope' => 'user',
        ]);
        $authorize_uri = 'https://github.com/login/oauth/authorize?' . $query;
        return Redirect::to($authorize_uri);
    });

    // handle github callback
    Route::get('/login/github/callback', function () {
        // exchange access_token with code
        // get github user info
        $code = input('code');
        $accessToken = User::getGithubUserToken($code);
        $githubUserEmail = User::getGithubUserEmailByToken($accessToken);
        $githubUser = User::getGithubUserByToken($accessToken);


        // check if exists github_id
        // if exists github_id and login
        // if not exists create new user
        // if not exists and github user email = local user email ,it will add github_id to this local user and login
        if (!User::where('github_id', $githubUser->id)->first()) {
            if (User::where('email', $githubUserEmail)->first()) {
                $user = User::where('email', $githubUserEmail)->first();
                $user->github_id = $githubUser->id;
                $user->social_avatar = $githubUser->avatar_url;
                $user->save();
                Auth::login($user);
            } else {
                $password = bcrypt(Str::random(6));
                $userName = $githubUser->name ? $githubUser->name : $githubUser->login;
                $user = Auth::register([
                    'name' => $userName,
                    'email' => $githubUserEmail,
                    'password' => $password,
                    'password_confirmation' => $password,
                ], true);
                $user->github_id = $githubUser->id;
                $user->social_avatar = $githubUser->avatar_url;
                $user->save();
                Auth::login($user);
            }
        } else {
            $userInstance = User::where('github_id', $githubUser->id)->firstOrFail();
            $userInstance->social_avatar = $githubUser->avatar_url;
            $userInstance->save();
            Auth::login($userInstance);
        }
        return Redirect::to('/user/center/account');
    });


    //
    // login with qq
    //

    // redirect to qq login
    Route::get('/login/qq', function () {
        $query = http_build_query([
            'response_type' => 'code',
            'client_id' => Config::get('buuug7.user::qq.client_id'),
            'redirect_uri' => Config::get('buuug7.user::qq.redirect_uri'),
            'state' => 'tianqiqqauth',
            'scope' => 'get_user_info',
        ]);
        $authorize_uri = 'https://graph.qq.com/oauth2.0/authorize?' . $query;
        return Redirect::to($authorize_uri);
    });

    // handle qq callback
    Route::get('login/qq/callback', function () {

        $code = input('code');

        $accessToken = User::getQQUserToken($code);

        $openID = User::getQQUserOpenId($accessToken);

        $qqUser = User::getQQUser($accessToken, Config::get('buuug7.user::qq.client_id'), $openID);

        print_r($qqUser);
        die();

        if (!User::where('qq_id', $openID)->first()) {

            Session::flash('accessToken', $accessToken);
            Session::flash('openID', $openID);
            Session::flash('qqUser', $qqUser);
            return Redirect::to('/user/bind-qq');

        } else {
            return 'already existed !';
        }

        return Redirect::to('/user/center/account');

        /*
         * object(stdClass)#320 (18) { ["ret"]=> int(0) ["msg"]=> string(0) "" ["is_lost"]=> int(0) ["nickname"]=> string(6) "晴天" ["gender"]=> string(3) "男" ["province"]=> string(0) "" ["city"]=> string(0) "" ["year"]=> string(4) "2010" ["figureurl"]=> string(73) "http://qzapp.qlogo.cn/qzapp/101441921/52F630AB6B7A2B3321D17168813FB040/30" ["figureurl_1"]=> string(73) "http://qzapp.qlogo.cn/qzapp/101441921/52F630AB6B7A2B3321D17168813FB040/50" ["figureurl_2"]=> string(74) "http://qzapp.qlogo.cn/qzapp/101441921/52F630AB6B7A2B3321D17168813FB040/100" ["figureurl_qq_1"]=> string(69) "http://q.qlogo.cn/qqapp/101441921/52F630AB6B7A2B3321D17168813FB040/40" ["figureurl_qq_2"]=> string(70) "http://q.qlogo.cn/qqapp/101441921/52F630AB6B7A2B3321D17168813FB040/100" ["is_yellow_vip"]=> string(1) "0" ["vip"]=> string(1) "0" ["yellow_vip_level"]=> string(1) "0" ["level"]=> string(1) "0" ["is_yellow_year_vip"]=> string(1) "0" }
         * */


    });


    //
    // login with weixin
    //

    // redirect to weixin login
    Route::get('login/weixin', function () {
        return Redirect::to('/coming-soon');
    });
    // handle weixin callback
    Route::get('login/weixin/callback', function () {
        return Redirect::to('/coming-soon');
    });


});


