@extends('layouts.admin.app')
@section('contents')
   <div class="container">
    <div class="row">
        <div class="col-md-6 shadow border p-3">
            <h1 class="text-4xl font-semibold text-black text-center my-3">Add Question</h1>
            <form action="{{route('add')}}" method="POST">
                @csrf
                <div class="form-group" >
                    <label for="">Question</label>
                    <input type="text" name="question" value="{{old('question')}}" class="form-control @error('question') is-invalid @enderror">
                    <span class="text-danger">@error('question'){{$message}}@enderror</span>
                </div>
                <div class="form-group" >
                    <label for="">Answer</label>
                    <textarea name="answer" id="" value="{{old('answer')}}" cols="30" class="form-control @error('answer') is-invalid @enderror" rows="5"></textarea>
                    <span class="text-danger">@error('answer'){{$message}}@enderror</span>
                </div>
                <button class="btn btn-sm btn-success bg-green mt-3">Add Question</button>
             </form>
        </div>
    </div>
   </div>
@endsection