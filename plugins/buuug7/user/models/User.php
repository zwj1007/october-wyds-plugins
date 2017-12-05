<?php namespace Buuug7\User\Models;

use GuzzleHttp\Client;
use October\Rain\Support\Facades\Config;

class User extends \RainLab\User\Models\User
{
    //
    // qq
    //
    public static function getQQUserToken($code)
    {
        $http = new Client();
        $response = $http->post('https://graph.qq.com/oauth2.0/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => '101441921',
                'client_secret' => '0b51fea80164a1c697b8e1663f1d9da2',
                'redirect_uri' => 'http://ds8.com.cn/login/qq/callback',
                'code' => $code,
            ],
        ]);
        $result = $response->getBody();
        $accessToken = explode('&', explode('=', $result)[1])[0];
        return $accessToken;
    }

    public static function getQQUserOpenId($token)
    {
        $openID_API = 'https://graph.qq.com/oauth2.0/me';
        $http = new Client();
        $response = $http->post($openID_API, [
            'form_params' => [
                'access_token' => $token,
            ],
        ]);

        $str = $response->getBody();
        $lpos = strpos($str, "(");
        $rpos = strrpos($str, ")");
        $str = substr($str, $lpos + 1, $rpos - $lpos - 1);
        $json = json_decode($str);

        $openid = $json->openid;
        return $openid;
    }

    public static function getQQUser($token, $appID, $openID)
    {
        $userApi = 'https://graph.qq.com/user/get_user_info';
        $http = new Client();

        $response = $http->request('GET', $userApi, [
            'query' => [
                'access_token' => $token,
                'oauth_consumer_key' => $appID,
                'openid' => $openID,
            ],
        ]);
        return json_decode($response->getBody());
    }

    public static function getTianQiUserToken($code)
    {
        $http = new Client();
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

    public static function getTianQiUserByToken($token)
    {
        $userApi = 'http://7.jq2.com/api/user';
        $http = new Client();
        $response = $http->get($userApi, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        return json_decode($response->getBody());
    }

    public static function getGithubUserToken($code)
    {
        $tokenUri = 'https://github.com/login/oauth/access_token';
        $http = new Client();
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

    public static function getGithubUserEmailByToken($token)
    {
        $emailsUri = 'https://api.github.com/user/emails';
        $http = new Client();
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

    public static function getGithubUserByToken($token)
    {
        $userUri = 'https://api.github.com/user';
        $http = new Client();
        $response = $http->get($userUri, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);
        return json_decode($response->getBody());
    }


}