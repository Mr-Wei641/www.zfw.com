<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends BaseController
{
    //
    public function index(){
        $data = User::paginate($this->pagesize);
        return view('admin.user.index',compact('data'));
    }
}