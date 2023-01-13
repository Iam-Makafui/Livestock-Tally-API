<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    

    //public function for registering user account
    public function RegisterUser() {

        return response([
            'message' => "API is working",
            'status' => 200 
         ]);

    }


}
