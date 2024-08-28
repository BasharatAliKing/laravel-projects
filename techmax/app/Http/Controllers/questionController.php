<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class questionController extends Controller
{
   public function view(){
    $question=DB::table('questions')->paginate(4);
    return view('admin.questions',['data'=>$question]);
   }    
   public function add_view(){
    return view('admin.addQuestion');
   }
   public function add(Request $req){
    $req->validate([
        'question'=>'required',
        'answer'=>'required',
    ]);
    $question=DB::table('questions')->insert([
        'question'=>$req->question,
        'answer'=>$req->answer,
    ]);
    if($question){
        return redirect()->route('questions');
    }
   }
   public function delete(string $id){
    $delete=DB::table('questions')->where('id',$id)->delete();
    if($delete){
        return redirect()->route('questions');
    }
   }
}
