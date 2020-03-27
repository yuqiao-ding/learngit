<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Log;

class DbController extends Controller
{

    function insert()
    {
        // DB::table('users')->insert(['id'=>2,'name'=>"这是个title",'email'=>"1213133456@qq.com",'password'=>"123456"]);
        $insertData = [
            [
                "id"   => '1111',
                "name"    => '这是个title2',
                "email"    => '22qweqweqw2231qweqwe2322@qq.com',
                'password' => "1234561231312",
                // "describe" => '这是个describe2',
            ],
            [
                "id"   => '112',
                "name"    => '这是个title3',
                "email"    => '3333qweqwe1qweqwe231233@qq.com',
                'password' => "123456712313",
                // "describe" => '这是个describe3',
            ],

        ];
        DB::table('jjj')->insert($insertData);
    }
    public function index()
    {
        $users = DB::table('jjj')->get();
        Log::info($users);
        dd();
    }
    public function add()
    {
        DB::table('jjj')
            ->updateOrInsert(
                ['email' => 'john@example.com', 'name' => 'John','password' => "1234567",]
            );
    }
    public function delete()
    {
        DB::table('users')->where('id', '>', 6)->delete();
    }
    public function update()
    {
        DB::table('jjj')
            ->where('id', 112)
            ->update(['name' => 'cccccc']);
    }

}
