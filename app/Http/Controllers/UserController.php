<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // function index()
    // {
    //     return DB::select('select * from users');
    // }

    
    function getData()
    {
        return User::all();
    }

    function getUser()
    {
        
       $collection = User::all();
       return view('users',[$collection]);
    }
}
