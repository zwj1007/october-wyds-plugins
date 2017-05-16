<?php
use Illuminate\Support\Facades\Route;
use Buuug7\User\Models\User;
use RainLab\User\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use October\Rain\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
Route::get('/login/github', function () {
    $query = http_build_query([
        'client_id' => Config::get('buuug7.user::github.client_id'),
        'redirect_uri' => Config::get('buuug7.user::github.redirect_uri'),
        'scope' => 'user',
    ]);
    $authorize_uri = 'https://github.com/login/oauth/authorize?' . $query;
    return Redirect::to($authorize_uri);
});

Route::get('/login/github/callback', function () {
    $code = input('code');
    $accessToken = User::getGithubUserToken($code);
    $githubUserEmail = User::getGithubUserEmailByToken($accessToken);
    $githubUser = User::getGithubUserByToken($accessToken);


    if (!User::where('github_id', $githubUser->id)->first()) {
        if(User::where('email',$githubUserEmail)->first()){
            $user=User::where('email',$githubUserEmail)->first();
            $user->github_id=$githubUser->id;
            $user->save();
        }else{
            $password = bcrypt(\Illuminate\Support\Str::random(6));
            $userName=($githubUser->name?$githubUser->name: $githubUser->login).rand(1,11111111);

            $user = Auth::register([
                'name' => $userName,
                'email' => $githubUserEmail,
                'password' => $password,
                'password_confirmation' => $password,
            ], true);
            $user->github_id=$githubUser->id;
            $user->save();
        }
    }

    $userInstance = User::where('github_id', $githubUser->id)->firstOrFail();
    Auth::login($userInstance);
    Session::put('user.avatar', $githubUser->avatar_url);

    return Redirect::to('/user/center/account');
});
