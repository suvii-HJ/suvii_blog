<?php
/**
 * Created by PhpStorm.
 * User: 10717
 * Date: 2018/1/7
 * Time: 21:29
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Suvii 2018/1/14 18:08
     * 首页展示
     */
    public function blogIndex(Request $request)
    {

        return view('index');
    }




}