<?php

namespace app\index\controller;

use think\Controller;

class User extends Controller
{
    public function index()
    {
        $test = new \my\Test();
        $test->sayHello();
        // echo "我是咔咔文件";
    }
}
