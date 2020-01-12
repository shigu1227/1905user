<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Model\Common;

class UserController extends Controller
{
    public function reg()
    {
        $url = "http://api.1905pass.com/user/reg";
        $data = [
            'user_name' => 'shigu',
            'user_email' => '2436229636@qq.com',
            'user_tel'=>'18131004345',
            'user_pwd'=>'011227',
            'user_pwd1'=>'011227'
        ];

        $response = Common::curlPost($url,$data);
        print_r($response);
    }

    public function login()
    {
        $login_info = [
            'user_name'=>'shigu',
            'user_pwd'=>'011227'
        ];
        $url = "http://api.1905pass.com/user/login";
        $response = Common::curlPost($url,$login_info);
        print_r($response);
    }

    public function getData()
    {
        $token = 'fe4b10e5bb9509859b12b6fba68a907f ';
        $uid = '8';
        $url = "http://api.1905pass.com/user/token";
        $header = [
            'token:'.$token,
            'uid:'.$uid
        ];
        $response = Common::curlGet($url,$header);
        print_r($response);
    }
}
