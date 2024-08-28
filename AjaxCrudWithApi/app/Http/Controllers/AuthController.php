<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        $user=User::create([
            'name'=>'Basharat Ali',
            'email'=>'admin@gmail.com',
            'password'=>'123',
        ]);
    }
}
