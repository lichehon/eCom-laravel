<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    // public function index()
    // {
    //     return ['name'=>"anil",'age'=>27];
    // }

    // public function viewLoad()
    // {
    //     $data = ['rena','gian','benskzi'];
    //     return view('users',['users'=>$data]);
    // }

    public function login(Request $req)
    {
        $req->validate([
            'username'=>'required | min:5',
            'password'=>'required | min:6'
        ]); 
        return $req->input();
    }
}