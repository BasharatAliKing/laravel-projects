<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Mail\welcomemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function student(){
        return view('studentform');
    }
    public function submitform(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'age'=>'required|numeric',
            'roll'=>'required|numeric',
            'file'=>'required|mimes:png,jpg,doc,pdf,xls'
        ]);
        $filename=time().".". $req->file('file')->extension();
        $req->file('file')->move('uploads',$filename);
        $adminemail='basharatalidogar14@gmail.com';
        $request=Mail::to($adminemail)->send(new welcomemail($req->all(),$filename));
        dd($request);
        // Student::create([
        //     'name'=>$req->name,
        //     'email'=>$req->email,
        //     'roll'=>$req->roll,
        //     'age'=>$req->age,
        //     'file'=>$req->file('attachment')->move('uploads',$filename),
        // ]);
        return redirect()->route('/');
    }
}
