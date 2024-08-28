<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyType;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class allTypeController extends Controller
{
    public function allType(){
        $id=Auth::user()->id;
        $profiledata=User::find($id);
        $types=PropertyType::latest()->get();
        return view('admin.property.allType',compact('profiledata','types'));
    }  // end Method
    public function addProperty(){
        return view('admin.property.addProperty');
    }
    public function addProp(Request $req){
        $req->validate([
            'type_name' => 'required|unique:property_types',
            'type_icon' =>'required',
        ]);
        PropertyType::insert([
            'type_name' => $req->type_name,
            'type_icon' => $req->type_icon,
        ]);
        $notification= array(
            'message' => 'Property type Successfully Added ! ',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.alltype')->with($notification);
    }   // End Method
    public function typeDelete(string $id){
        PropertyType::findOrFail($id)->delete();
        return redirect()->route('admin.alltype');
    }  // End Method
    public function editProperty($id){
        $prop = PropertyType::where('id',$id)->first();
        return view('admin.property.editProperty',compact('prop'));
    }   //End Method
    public function UpdateProperty(Request $req){
        $pid=$req->id;
        PropertyType::where('id',$pid)->update([
            'type_name' => $req->type_name,
            'type_icon' => $req->type_icon,
        ]);
        $notification= array(
            'message' => 'Property type Successfully Updated ! ',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.alltype')->with($notification);
    }


}
