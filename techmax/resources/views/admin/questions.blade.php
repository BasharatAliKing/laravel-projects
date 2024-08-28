@extends('layouts.admin.app')
@section('contents')
<div class="card bg-box ">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <h5 class="card-header text-black font-semibold">Frequently Questions</h5>
    <div class="mt-2  text-left">
        <a href="{{route('addquestion')}}" type="submit" class="btn bg-green text-white m-2" style="margin-left:20px;">Add Question</a>
    </div>
    <div class="table-responsive ">
      
        <table class="table overflow-x-scroll col-12">
            <thead class="bg-king text-white">
                <tr>
                    <th class="text-black ">ID</th>
                    <th class="text-black ">Questions</th>
                    <th class="text-black ">Answers</th>
                    <th class="text-black h-auto w-32">Actions</th>
                    </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($data as $question)
                  <tr>
                    <td> <strong  width="50%"  class="text-black">{{$question->id}}</strong></td>
                    <td> <strong  width="50%"  class="text-black">{{$question->question}}</strong></td>
                    <td ><span  class="badge bg-king me-1 text-black">{{$question->answer}}</span></td>
                    <td class="flex gap-2">
                       <a href="{{route('delete',$question->id)}}" class="btn btn-sm btn-danger">Delete</a>
                       <a href="" class="btn btn-sm btn-warning">Update</a>
                    </td>
                </tr>
               
              @endforeach
               
            </tbody>
        </table>
    </div>
</div>
<div class="my-3"> {{ $data->links() }}</div>
@endsection