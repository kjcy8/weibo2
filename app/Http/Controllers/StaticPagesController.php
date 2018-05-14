<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    /**
     * 首页视图
     *
     */
    public function home()
    {
        return view('static_pages/home');
    }

    /**
     * 关于我们视图
     *
     */
    public function about()
    {
        return view('static_pages/about');
    }

    /**
     * 帮助页视图
     *
     */
    public function help()
    {
        return view('static_pages/help');
    }
}
