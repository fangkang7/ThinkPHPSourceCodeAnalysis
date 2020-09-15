<?php
namespace app\index\controller;

use think\Controller;
use test\Kaka;

class Index extends Controller
{
    public function index()
    {
        Kaka::say();
        // echo '咔咔微信：fangkangfk    微信公众号：PHP初学者必看';
    }
}
