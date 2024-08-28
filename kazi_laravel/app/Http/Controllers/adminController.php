<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function adminController(){
        $id=Auth::user()->id;
        $profiledata=User::find($id);
        return view('admin.admin_dashboard',compact('profiledata'));
    }
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    public function adminLogin(){
        return view('admin.admin_login');
    }  // End Method
    public function AdminProfile(){
        $id=Auth::user()->id;
        $profiledata=User::find($id);
        return view('admin.profile_dashboard',compact('profiledata'));
    } // end method
    public function AdminProfileUpdate(Request $req){
        $id=Auth::user()->id;
        $data=User::find($id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->address=$req->address;
        if($req->file('image')){
            $file=$req->file('image');
            @unlink(public_path('uploads/admin/'.$data->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/admin'),$filename);
            $data['image'] = $filename;
        }
        $data->save();

        $notification= array(
            'message' => 'Admin Profile data Successfully Updated ! ',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }  // End Model
    public function AdminUpdatePassword(){
        $id=Auth::user()->id;
        $profiledata=User::find($id);
        return view('admin.update_password',compact('profiledata'));
    }   // End Model
    public function AdminUpdatep(Request $req){
        $req->validate([
            'old_password'=>'required',
            'new_password'=>'required|confirmed',
        ]);
        // Match with Old Password
        if(!Hash::check($req->old_password, auth::user()->password)){
            $notification= array(
                'message' => 'Old Password does not match ! ',
                'alert-type' => 'error',
            );
            return back()->with($notification);
        }
        // Update the New Password
        User::whereId(auth()->user()->id)->update([
             'password' => Hash::make($req->new_password)
        ]);
        $notification= array(
            'message' => 'Admin Password Successfull Update ',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
}
