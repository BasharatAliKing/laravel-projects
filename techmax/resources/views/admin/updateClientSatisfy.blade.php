@extends('layouts.admin.app')
@section('contents')
   <div class="container">
    <div class="row">
        <div class="col-md-6 shadow border p-3">
            <h1 class="text-4xl font-semibold text-black text-center my-3">Update</h1>
           @foreach ($data as $id=>$value )
           <form action="{{route('update',$value->id)}}" method="POST">
            @csrf
            <div class="form-group" >
                <label for="">Finish Projects</label>
                <input type="text" value="{{$value->finished_projects}}" name="finished_projects" class="form-control">
            </div>
            <div class="form-group" >
                <label for="">Total Jobs</label>
                <input type="text" value="{{$value->create_jobs}}" name="create_jobs" class="form-control">
            </div>
            <div class="form-group" >
                <label for="">Happy Customers</label>
                <input type="text" value="{{$value->happy_customers}}" name="happy_customers" class="form-control">
            </div>
            <div class="form-group" >
                <label for="">Years Of Experience</label>
                <input type="text" value="{{$value->yearsof_experience}}" name="yearsof_experience" class="form-control">
            </div>
           
            <button class="btn btn-sm btn-warning mt-3">Update </button>
         </form>
           @endforeach
        </div>
    </div>
   </div>
@endsection