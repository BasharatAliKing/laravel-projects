<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenities;
class AmenitiesController extends Controller
{
    public function showAmenites(){
        $amenity = Amenities::latest()->get();
        return view('admin.amenities.viewAmenities',compact('amenity'));
    } // End Method
    public function addAmenity(){
        return view('admin.amenities.addAmenity');
    }  // End Method
    public function addAmen(Request $req){
        $req->validate([
            'amenity_name' => 'required|unique:Amenities',
        ]);
        $amenity = Amenities::insert([
            'amenity_name' =>$req->amenity_name,
        ]);
        $notification= array(
            'message' => 'Amenity Successfully Added.',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.amenities')->with($notification);
    }  // End Method
    public function deleteAmenity($id){
        $amenity = Amenities::findOrFail($id)->delete();
        return back();
    }
}
