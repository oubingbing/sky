<?php
/**
 * Created by PhpStorm.
 * User: bingbing
 * Date: 2017/5/19
 * Time: 17:26
 */

namespace App\Http\Controllers\UserAuth;


use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * 登录的视图页面
     * @author bingbing
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('userAuth.login');
    }
}