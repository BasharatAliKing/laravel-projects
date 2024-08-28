@extends('layouts.admin.app')
@section('contents')
   <div class="container">
    <div class="row">
        <div class="col-md-6 shadow border p-3">
            <h1 class="text-4xl font-semibold text-black text-center my-3">Update Service</h1>
          @foreach ($data as $id=>$service )
          <form action="{{route('updateservice',$service->id)}}" method="POST">
            @csrf
            <div class="form-group" >
                <label for="">Service Name</label>
                <input type="text" name="service_name" value="{{$service->service_name}}" class="form-control">
            </div>
            <div class="form-group" >
                <label for="">Service Description</label>
                 <textarea name="service_des"  id="" cols="30" rows="5" class="form-control">{{$service->service_des}}</textarea>
            </div>
            <button class="btn btn-sm btn-warning  mt-3">Update</button>
         </form>
          @endforeach
        </div>
    </div>
   </div>
@endsection