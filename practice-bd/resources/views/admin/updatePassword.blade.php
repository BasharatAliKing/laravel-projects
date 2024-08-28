@extends('layouts.admin')
@section('admin.content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
     
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<div class="page-content">
   <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
      
            <h6 class="card-title">Update Admin Password</h6>
      
            <form class="forms-sample" method="POST" action="{{route('admin.updatePassword')}}">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Old Password</label>
                <input type="password" value="{{old('old_password')}}" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="oldpassword" placeholder="Old Password" >
                <span class="text-danger"> @error('old_password') {{$message}} @enderror </span>
            </div>
              <div class="mb-3">
                <label for="name" class="form-label">New Password</label>
                <input type="password" value="{{old('new_password')}}" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="newpassword" placeholder="New Password"  >
                <span class="text-danger"> @error('new_password') {{$message}} @enderror </span>
            </div>
              <div class="mb-3">
                <label for="name" class="form-label">Confirm new Password</label>
                <input type="password" value="{{old('new_password_confirmation')}}" class="form-control" name="new_password_confirmation" id="confirmpassword" placeholder="Confirm Password"  >
            </div>
              <button type="submit" class="btn btn-primary me-2">Save Changes</button>
            </form>
      
          </div>
        </div>
      </div>    </div>
   

     
</div>

@endsection