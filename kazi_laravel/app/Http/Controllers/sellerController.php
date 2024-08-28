<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sellerController extends Controller
{
    public function sellerController(){
        return view('seller.seller_dashboard');
    }
}
