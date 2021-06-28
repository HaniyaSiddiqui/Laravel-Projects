<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class Users extends Controller
{
    // function index()
    // {
    //   $data = HTTP::get("https://reqres.in/api/users?page=1​");
    //   return view('users',['collection'=>$data['data']]); 
    // }

    //Class
    // function index()
    // {
    //     return DB::select("select * from users");
    // }

    //Model
    function index()
    {
        // $data = User::all();
        $data = User::paginate(3);

        return view('users',['collection'=>$data]);

    }


    //make getData method 
    // function getData(Request $req)
    // {
    //      return $req->input();
    // }
    
    function getData()
    {
       return User::all();
    }
}
