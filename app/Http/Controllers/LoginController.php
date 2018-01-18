<?php
/**
 * Created by PhpStorm.
 * User: 10717
 * Date: 2018/1/7
 * Time: 17:02
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Suvii 2018/1/7 21:46
     * 博客系统登录
     */
    public function login(Request $request){

        return view('index');
    }
}