<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Log;

class loginController extends Controller
{
    public function loginUser(Request $request)
    {
        Log::info("===========Login==================");

        $email = $request->input('email');
        $password = $request->input('pwd');

        $sql = "select * from user where user_email='".$email."' and user_password='".$password."'";
        $user = DB::select($sql);
        
        Log::info($sql);

        if (count($user) == 0) {
            echo "Authentication fail!!!";
            return;
        } else {
            return redirect()->route('user#list');
        }
        
        $user = users::where([
            ['user_email', $email],
            ['user_password', $password]
        ]);
    }
}
