<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class techmaxController extends Controller
{
    public function home(){
        $services=DB::table('services')->get();
       return view ('home',['data'=>$services]);
    }
    public function servicesdata(){
      
    }
}
