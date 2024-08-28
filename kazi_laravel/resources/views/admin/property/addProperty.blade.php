@extends('layouts.admin.admin')
@section('admin.content')

<div class="page-content">
   <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
      
            <h6 class="card-title">Add Property</h6>
      
            <form class="forms-sample" method="POST" action="{{route('admin.addprop')}}">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Property Name</label>
                <input type="text" value="{{old('type_name')}}" class="form-control @error('type_name') is-invalid @enderror" name="type_name" placeholder="property name" >
                <span class="text-danger"> @error('type_name') {{$message}} @enderror </span>
            </div>
              <div class="mb-3">
                <label for="name" class="form-label">Property Icon</label>
                <input type="text" value="{{old('type_icon')}}" class="form-control @error('type_icon') is-invalid @enderror" name="type_icon" placeholder="property name" >
                <span class="text-danger"> @error('type_icon') {{$message}} @enderror </span>
            </div>
            
              <button type="submit" class="btn btn-primary me-2">Add Property</button>
            </form>
      
          </div>
        </div>
      </div>    </div>
   

     
</div>

@endsection