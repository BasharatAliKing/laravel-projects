@extends('layouts.admin.admin')
@section('admin.content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
     
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<div class="page-content">
   <div class="row">
     <div class="card rounded col-md-4">
        <div class="card-body">
            <img class="mx-auto rounded-full w-32 h-32" src="{{(!empty($profiledata->image)) ? url('/uploads/admin/'.$profiledata->image) : url('/uploads/admin/no_image.jpg')}}" alt="profile-img">
           
          <div class="d-flex align-items-center justify-content-between mb-2">
            <h6 class="card-title mb-0">{{$profiledata->name}}</h6>
           
          </div>
          <p>{{$profiledata->des}}</p>
          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone</label>
            <p class="text-muted">{{$profiledata->phone}}</p>
          </div>
          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
            <p class="text-muted">{{$profiledata->email}}</p>
          </div>
          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
            <p class="text-muted">{{$profiledata->address}}</p>
          </div>
          <div class="mt-3 d-flex social-links">
            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
            </a>
            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
            </a>
            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
            </a>
          </div>
        </div>
      </div>
   
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
      
            <h6 class="card-title">Update Admin Profile</h6>
      
            <form class="forms-sample" method="POST" action="{{route('admin.profile.update')}}" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$profiledata->name}}" autocomplete="off" placeholder="Username">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="{{$profiledata->email}}" id="email" placeholder="Email">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" value="" id="password" name="password" autocomplete="off" placeholder="Password">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" name="phone" value="{{$profiledata->phone}}" id="phone" autocomplete="off" placeholder="Password">
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" value="{{$profiledata->address}}" name="address" id="exampleInputPassword1" autocomplete="off" placeholder="Password">
              </div>
              <div class="mb-3">
                <label class="form-label" for="formFile">Upload Image</label>
                <input class="form-control" type="file" name="image" id="image">
              </div>
              <div class="mb-3">
                <label class="form-label" for="formFile"></label>
                <img id="showimage" class="rounded-full w-20 h-20" src="{{(!empty($profiledata->image)) ? url('/uploads/admin/'.$profiledata->image) : url('/uploads/admin/no_image.jpg')}}" alt="profile-img">
              </div>
              <button type="submit" class="btn btn-primary me-2">Save Changes</button>
            </form>
      
          </div>
        </div>
      </div>    </div>
   

     
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>
  
  // @if(Session::has('message'))
  // var type = "{{ Session::get('alert-type','info') }}"
  // switch(type){
  //    case 'info':
  //    toastr.info(" {{ Session::get('message') }} ");
  //    break;
 
  //    case 'success':
  //    toastr.success(" {{ Session::get('message') }} ");
  //    break;
 
  //    case 'warning':
  //    toastr.warning(" {{ Session::get('message') }} ");
  //    break;
 
  //    case 'error':
  //    toastr.error(" {{ Session::get('message') }} ");
  //    break; 
  // }
  // @endif 
 </script>

     {{-- form start here.... --}}
@endsection