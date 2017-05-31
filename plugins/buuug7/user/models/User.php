<?php namespace Buuug7\User\Models;

use GuzzleHttp\Client;
use October\Rain\Support\Facades\Config;

class User extends \RainLab\User\Models\User
{

    public static function getTianQiUserToken($code){
        $http= new Client();
        $response = $http->post('http://7.jq2.com/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => Config::get('buuug7.user::tianqi.client_id'),
                'client_secret' => Config::get('buuug7.user::tianqi.client_secret'),
                'redirect_uri' => Config::get('buuug7.user::tianqi.redirect_uri'),
                'code' => $code,
            ],
        ]);
        $accessToken = json_decode($response->getBody())->access_token;
        return $accessToken;
    }

    public static function getTianQiUserByToken($token){
        $userApi='http://7.jq2.com/api/user';
        $http=new Client();
        $response=$http->get($userApi,[
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        return json_decode($response->getBody());
    }

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