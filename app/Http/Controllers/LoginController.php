<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\user;

class LoginController extends Controller
{

    public function homeLogin(Request $request){
       
        return view('user/home-login');
    }

    public function saveUser(Request $request){
        $nombre = $request->input("nombre");
        $password = $request->input("password");

        $objUser = new user(
            [
                'nombre' => $nombre,
                'password' => $password
            ]
        );

         $objUser->save();
 
        if($objUser){
            return response()->json(['data' => 1]);
        }
    }

}
