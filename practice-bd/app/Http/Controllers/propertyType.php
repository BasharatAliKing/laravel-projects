<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\propertyType;

class propertyType extends Controller
{
    public function viewPropertytype(){
        $id=Auth::user()->id;
        $profiledata=User::find($id);
        $type=propertyType::latest()->get();
        return view('admin.propertytype',compact('type'));
    }
}
