@extends('layouts.admin.app')
@section('contents')
   <div class="container">
    <div class="row">
        <div class="col-md-6 shadow border p-3">
            <h1 class="text-4xl font-semibold text-black text-center my-3">Add logo Image of Trusted Client</h1>
            <form action="{{route('addtrustedclient')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group" >
                    <label for="">Image</label>
                    <input type="file" name="image">
                </div>
                <button class="btn btn-sm btn-success bg-green mt-3">Add Image</button>
             </form>
        </div>
    </div>
   </div>
@endsection