<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function addUser(Request $req){
        $req->validate([
            'username'=>'required',
            'useremail'=>'required|email',
            'userpassword'=>'required|between:8,12',
            'useraddress'=>'required'
        ]);

        return $req->all();
    }
}

// A B C D E F G H I J K L M N O P Q R S T U V W X Y Z .