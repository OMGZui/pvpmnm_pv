<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/3/30
 * Time: 11:50
 */
namespace App\Http\Controllers;

class HomeController extends Controller
{
    // 首页
    public function index()
    {
        return view('home.index');
    }

    // 登录页
    public function login()
    {
        return view('home.login');
    }
}