@extends('layouts.admin.app')
@section('contents')
  @foreach ($data as $id=>$service )
      <h3>{{$service->service_name}}</h3>
      <h3>{{$service->service_des}}</h3>
  @endforeach
@endsection