<?php

namespace App\Http\Controllers;

use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function insert10k()
    {
        $mobile_arr=[
            1 => 132,
            2 => 138,
            3 => 136,
            4 => 150,
            5 => 152,
            6 => 153,
            7 => 158,
        ];
        $emial_arr = [
            1 => '@qq.com',
            2 => '@139.com',
            3 => '@baidu.com',
            4 => '@xinlang.com'
        ];
        for ($i=0;$i<10000;$i++){
            $data = [
                'user_name' => Str::random(10),
                'email' => Str::random(12) . $emial_arr[mt_rand(1,4)],
                'mobile' => $mobile_arr[mt_rand(1,7)] . mt_rand(11111111,99999999),
                'age' => mt_rand(1,99)
            ];
            $id=UserModel::insertGetId($data);
            dump($id);
        }
    }
}
