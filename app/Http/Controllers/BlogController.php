<?php
/**
 * Created by PhpStorm.
 * User: 10717
 * Date: 2018/1/17
 * Time: 23:45
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class BlogController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Suvii 2018/1/14 18:20
     * 新增博客
     */
    public function addBlog(Request $request){

        return view('newBlog');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Suvii 2018/1/17 23:54
     * 博客管理
     */
    public function management(Request $request){

        return view('management');
    }
}