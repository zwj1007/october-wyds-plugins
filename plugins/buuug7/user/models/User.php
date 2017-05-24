<?php namespace Buuug7\User\Models;

use GuzzleHttp\Client;
use October\Rain\Support\Facades\Config;

class User extends \RainLab\User\Models\User
{
    public static function getGithubUserToken($code){
        $tokenUri='https://github.com/login/oauth/access_token';
        $http=new Client();
        $response = $http->post($tokenUri, [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'form_params' => [
                'client_id' => Config::get('buuug7.user::github.client_id'),
                'client_secret' => Config::get('buuug7.user::github.client_secret'),
                'code' => $code,
                'redirect_uri' => Config::get('buuug7.user::github.redirect_uri'),
            ],
        ]);
        return json_decode($response->getBody())->access_token;
    }

    public static function getGithubUserEmailByToken($token){
        $emailsUri='https://api.github.com/user/emails';
        $http=new Client();
        $response = $http->get($emailsUri, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        foreach (json_decode($response->getBody(), true) as $email) {
            if ($email['primary'] && $email['verified']) {
                return $email['email'];
            }
        }
    }

    public static function getGithubUserByToken($token){
        $userUri='https://api.github.com/user';
        $http=new Client();
        $response = $http->get($userUri, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);
        return json_decode($response->getBody());
    }

}