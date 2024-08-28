<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenities;
use App\Models\User;
class AmenitiesController extends Controller
{
    public function showAmenites(){
        $id=Auth()->user()->id;
        $user=User::find($id);
        $amenity = Amenities::latest()->get();
        return view('admin.amenities',compact('amenity','user'));
    } // End Method
    public function addAmenity(){
        $id=Auth()->user()->id;
        $user=User::find($id);
        return view('admin.addAmenity',compact('user'));
    }
    public function addAmen(Request $req){
        $amenity=Amenities::insert([
          'amenity_name' => $req->amenity_name ,
        ]);
        return redirect('/admin/amenities');
    }  // End Method
    public function deleteAmenity($id){
        Amenities::findOrFail($id)->delete();
        return redirect('/admin/amenities');
    }
}
