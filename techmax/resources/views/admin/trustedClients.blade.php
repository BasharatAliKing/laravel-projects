@extends('layouts.admin.app')
@section('contents')
  <div class="container">
    <h1>Our Trusted Clients</h1>
    <a href="{{route('trustedclient')}}" class="btn btn-sm btn-success my-3">Add Image</a>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($data as $img)
                 <tr>
                    <td>{{$img->id}}</td>
                    <td>{{$img->image}}</td>
                    <td class="flex gap-2">
                        <a href="{{route('delete',$img->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        <a href="{{route('updateTrustedClient',$img->id)}}" class="btn btn-sm btn-warning">Update</a>
                     </td>
                </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection