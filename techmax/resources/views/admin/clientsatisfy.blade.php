@extends('layouts.admin.app')
@section('contents')
<div class="card bg-box ">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <h5 class="card-header text-black font-semibold">Clients Satisfication</h5>
    <div class="mt-2  text-left">
        <a href="{{route('addclientstable')}}" type="submit" class="btn bg-green text-white m-2" style="margin-left:20px;">Add Data</a>
    </div>
    <div class="table-responsive ">
      
        <table class="table overflow-x-scroll col-12">
            <thead class="bg-king text-white">
                <tr>
                    <th class="text-black w-32">Projects</th>
                    <th class="text-black h-auto w-32">Jobs</th>
                    <th class="text-black h-auto w-32">Happy Customers</th>
                    <th class="text-black h-auto w-32">Experience</th>
                  
                    <th class="text-black">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($data as $id=>$client)
                  <tr>
                    <td> <strong  width="50%"  class="text-black">{{$client->finished_projects}}</strong></td>
                    <td ><span  class="badge bg-king me-1 text-black">{{$client->create_jobs}}</span></td>
                    <td ><span  class="badge bg-king me-1 text-black">{{$client->happy_customers}}</span></td>
                    <td ><span  class="badge bg-king me-1 text-black">{{$client->yearsof_experience}}</span></td>
                    <td class="flex gap-2">
                       <a href="{{route('deleteclient',$client->id)}}" class="btn btn-sm btn-danger">Delete</a>
                       <a href="{{route('update_view',$client->id)}}" class="btn btn-sm btn-warning">Update</a>
                    </td>
                </tr>
               
              @endforeach
               
            </tbody>
        </table>
        {{-- {{ $products->links() }} --}}
    </div>
</div>
@endsection