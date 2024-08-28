@extends('layouts.admin.app')
@section('contents')
   <div class="container">
    <div class="row">
        <div class="col-md-6 shadow border p-3">
            <h1 class="text-4xl font-semibold text-black text-center my-3">Add Service</h1>
            <form action="{{route('addclientdata')}}" method="POST">
                @csrf
                <div class="form-group" >
                    <label for="">Finish Projects</label>
                    <input type="text" name="finished_projects" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="">Total Jobs</label>
                    <input type="text" name="create_jobs" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="">Happy Customers</label>
                    <input type="text" name="happy_customers" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="">Years Of Experience</label>
                    <input type="text" name="yearsof_experience" class="form-control">
                </div>
               
                <button class="btn btn-sm btn-success bg-green mt-3">Add </button>
             </form>
        </div>
    </div>
   </div>
@endsection