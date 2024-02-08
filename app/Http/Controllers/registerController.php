<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Log;

class registerController extends Controller
{
    public function register(Request $request)
    {
        Log::info("===========Register==================");

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('pwd');
        $role = $request->input('role');

        // $sql = "select * from users where email_address='".$email."' and password='".$password."'";

        $sql = "insert into users (`name`, `email_address`, `password`, `role`) VALUES ('". $name . "', '" . $email . "', '" . $password . "', '" . $role . "');";
        $users = DB::select($sql);

        echo "Register Successfully!!!";
    }

    public function order(Request $request)
    {
        Log::info("===========Register==================");

        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;

        echo "Name    => ".$name."<br>";
        echo "Address => ".$address."<br>";
        echo "Phone   => ".$phone."<br><br>";

        echo "Order successfully Successfully!!!";
    }
}
