<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Log;

class userController extends Controller
{
    public function registUser(Request $request)
    {
        Log::info("===========registUser==================");

        $user = new User;
        $user->user_name = $request->name;
        $user->user_email = $request->email;
        $user->user_password = $request->pswd;
        $user->salary = $request->salary;
        $user->comment = $request->comment;
        $user->insert_date = date('Y-m-d H:i:s');
        $user->save();
        $users = user::all();
        return redirect()->route('user#list');
    }

    public function listUser()
    {
        Log::info("===========listUser==================");
        
        $user = new User;
        $users = user::all();
        return view('user_list')->with('users', $users);
    }

    public function detailUser($id)
    {
        Log::info("===========listUser==================");
        
        $user = user::where('user_id', $id)->first();
        return view('user_detail')->with('user', $user);
    }

    public function xss()
    {
        return view('sha');
    }
}
