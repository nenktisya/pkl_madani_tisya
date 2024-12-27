<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function hello(){
        return view('admin.dashboard');
    }
    public function banner(){
        return view('admin.banner');
    }
    public function product(){
        return view('admin.product');
    }
    public function addbanner(){
        return view('admin.addbanner');
    }
}
