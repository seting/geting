<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    // 后台首页加载视图
    public function index(){
    	//加载后台首页
    	return view('Admin.Index.index');
    }
    
}