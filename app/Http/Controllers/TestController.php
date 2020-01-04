<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/4
 * Time: 19:58
 */
namespace App\Http\Controllers;

use Carbon\Carbon;

class TestController extends Controller{

    public function test(){

        dd(bcrypt('qqzxc159'));
    }
}