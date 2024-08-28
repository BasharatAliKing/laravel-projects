<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class serviceController extends Controller
{
    public function showServices(){
        $service=DB::table('services')->get();
        return view('home',['data'=>$service]);
      }
}
