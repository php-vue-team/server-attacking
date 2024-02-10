<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\User;
use Log;

class loginController extends Controller
{
    public function loginUser(Request $request)
    {
        Log::info("===========Login==================");

        $email = $request->input('email');
        $password = $request->input('pswd');

        $sql = "select * from user where user_email='".$email."' and user_password='".$password."'";
        Log::info($sql);
        $user = DB::select($sql);

        if (count($user) == 0) {
            echo "Authentication fail!!!";
            return;
        } else {
            foreach ($user as $userInfo) {
                $userName = $userInfo->user_name;
            }
            session(['user_name' => $userName]);
            return redirect()->route('user#list');
        }
        
        // $user = users::where([
        //     ['user_email', $email],
        //     ['user_password', $password]
        // ]);
    }

    public function logoutUser(Request $request)
    {
        Session::flush();
        return redirect()->route('user#login');
    }
}
