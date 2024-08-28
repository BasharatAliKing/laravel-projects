<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function viewAdminDashboard(){
        $id=Auth()->user()->id;
        $user=User::find($id);
        return view('admin.dashboard',compact('user'));
    }
    public function viewProfile(){
        $id=Auth()->user()->id;
        $user=User::find($id);
        return view('admin.profile',compact('user'));
    }
    public function editProfile(){
        $id=Auth()->user()->id;
        $user=User::find($id);
        return view('admin.editProfile',compact('user'));
    }   // End Method
    public function updateProfile(Request $req){
    //    print_r($req->image);
        $id=Auth()->user()->id;
        $user=User::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        if($req->file('image')){
            $file=$req->file('image');
            @unlink(public_path('uploads/admin/'.$user->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/admin'),$filename);
            $user['image'] = $filename;
        }
        $user->save();

        // $notification= array(
        //     'message' => 'Admin Profile data Successfully Updated ! ',
        //     'alert-type' => 'success',
        // );

        return redirect()->back();
    }  // End Method
    public function editPassword(){
        $id=Auth()->user()->id;
        $user=User::find($id);
        return view('admin.updatePassword',compact('user'));
    }  // End Model
    public function updatePassword(Request $req){
        $id=Auth()->user()->id;
        $user=User::find($id);
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
   
    public function viewAmenities(){
        $id=Auth()->user()->id;
        $user=User::find($id);
        return view('admin.amenities',compact('user'));
    }
    public function logoutAdmin(Request $request)
    {
        $user = $request->user();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
