<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class techmaxController extends Controller
{
      public function home(){
        $service=DB::table('services')->get();
        $trusted=DB::table('trusted_clients')->get();
        return view('home',compact('service','trusted'));
      }
      public function about(){
        return view('about');
      }
      public function services(){
        $service=DB::table('services')->get();
        $question=DB::table('questions')->get();
        return view('services',compact('service','question'));
      }
      public function blog(){
        return view('blog');
      }
      public function portfolio(){
        return view('portfolio');
      }
      public function contact(){
        return view('contacts');
      }
      public function showServices(){
        $service=DB::table('services')->get();
        return view('home',['data'=>$service]);
      }
      public function showService(){
        $service=DB::table('services')->get();
        return view('services',['data'=>$service]);
      }
      public function showServicehome(){
        $service=DB::table('services')->get();
        return view('home',['data'=>$service]);
      }
      public function showClientSatisfy(){
        $satisfy=DB::table('clientssatisfy')->get();
        return view('home',['data'=>$satisfy]);
      }
      public function viewtrustedClients(){
        $trusted=DB::table('trusted_clients')->get();
        print_r($trusted);die;
        return view('trusted',['data'=>$trusted]);
       }
     
}
