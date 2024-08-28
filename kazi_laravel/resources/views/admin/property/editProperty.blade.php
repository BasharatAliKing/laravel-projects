@extends('layouts.admin.admin')
@section('admin.content')


<div class="page-content">
   <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
      
            <h6 class="card-title">Update Property</h6>
    
          <form class="forms-sample" method="POST" action="{{route('admin.updateprop',$prop->id)}}">
            @csrf
            <input type="hidden" value="{{$prop->id}}" name="id">
            <div class="mb-3">
              <label for="name" class="form-label">Property Name</label>
              <input type="text" name="type_name" value="{{$prop->type_name}}" class="form-control " >
              <span class="text-danger"> @error('type_name') {{$message}} @enderror </span>
          </div>
            <div class="mb-3">
              <label for="name" class="form-label">Property Icon</label>
              <input type="text" name="type_icon" value="{{$prop->type_icon}}" class="form-control">
              <span class="text-danger"> @error('type_icon') {{$message}} @enderror </span>
          </div>
          
            <button type="submit" class="btn btn-warning text-white me-2">Save Changes</button>
          </form>
         
      
          </div>
        </div>
      </div>    </div>
   

     
</div>

@endsection