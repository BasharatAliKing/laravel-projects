@extends('layouts.admin')
@section('admin.content')
<div class="page-content">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

                            <h6 class="card-title">Update Profile</h6>

                            <form class="forms-sample" method="POST" action="{{route('admin.updateprofile')}}" enctype="multipart/form-data">
                               @csrf
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formFile">Upload Image</label>
                                    <input class="form-control" type="file" name="image" id="image">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="formFile"></label>
                                    <img id="showimage" class="rounded-full w-20 h-20" src="{{(!empty($user->image)) ? url('/uploads/admin/'.$user->image) : url('/uploads/no_image.jpg')}}" alt="profile-img">
                                  </div>
                                <button type="submit" onclick="showSwal('custom-position')" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </form>

          </div>
        </div>
                </div>
</div>

<script>
    $(document).ready(function(){
      $('#image').change(function(e){
        var reader=new FileReader();
        reader.onload = function (e){
          $('#showimage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      })
    })
    </script>
  @endsection