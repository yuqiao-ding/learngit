<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    function insert()
    {
        // DB::table('users')->insert(['id'=>2,'name'=>"这是个title",'email'=>"1213133456@qq.com",'password'=>"123456"]);
        $insertData = [
            [
                "id"   => '1',
                "name"    => '这是个title2',
                "email"    => '22221qweqweqwe231312331qweqwe2322@qq.com',
                'password' => "1234561231312",
                // "describe" => '这是个describe2',
            ],
            [
                "id"   => '2',
                "name"    => '这是个title3',
                "email"    => '33312qweqe31231231qweqwe231233@qq.com',
                'password' => "123456712313",
                // "describe" => '这是个describe3',
            ],

        ];
        DB::table('jjj')->insert($insertData);
    }
}
