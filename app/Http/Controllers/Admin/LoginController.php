<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        if(auth()->check()){
            return redirect(route('admin.index'));
        }
        return view('admin.login.login');
    }

    public function login(Request $requset){
        $post = $this->validate($requset,[
            'username' => 'required',
            'password' => 'required'
        ]);
    

        $bool = auth()->attempt($post);
        if($bool){
            return redirect(route('admin.index'));
        }
        return redirect(route('admin.login'))->withErrors(['error'=>'登录失败']);
    }
}