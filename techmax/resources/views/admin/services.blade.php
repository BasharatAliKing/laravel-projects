@extends('layouts.admin.app')
@section('contents')
<div class="card bg-box ">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <h5 class="card-header text-black font-semibold">Services</h5>
    <div class="mt-2  text-left">
        <a href="{{route('addService')}}" type="submit" class="btn bg-green text-white m-2" style="margin-left:20px;">Add Service</a>
    </div>
    <div class="table-responsive ">
      
        <table class="table overflow-x-scroll">
            <thead class="bg-king text-white">
                <tr>
                    <th class="text-black w-32">Service Image</th>
                    <th class="text-black w-32">Service Name</th>
                    <th class="text-black h-auto w-32">Service Des</th>
                    <th class="text-black h-auto w-32">Service LongDes..</th>
                  
                    <th class="text-black">Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($data as $id=>$service)
                  <tr>
                    <td> <strong  width="50%"  class="text-black">{{$service->image}}</strong></td>
                    <td> <strong  width="50%"  class="text-black">{{$service->service_name}}</strong></td>
                    <td> <strong  width="50%"  class="text-black">{{$service->service_des}}</strong></td>
                    <td '><span  class="badge bg-king me-1 text-black">{{$service->service_longdes}}</span></td>
                    <td class="flex gap-2">
                       <a href="{{route('viewservice', $service->id)}}" class="btn btn-sm btn-primary">View</a>
                       <a href="{{route('deleteService',$service->id)}}" class="btn btn-sm btn-danger">Delete</a>
                       <a href="{{route('update_view',$service->id)}}" class="btn btn-sm btn-warning">Update</a>
                    </td>
                </tr>
               
              @endforeach
               
            </tbody>
        </table>
    </div>
</div>
<div class="mt-3">{{$data->links()}}</div>
@endsection