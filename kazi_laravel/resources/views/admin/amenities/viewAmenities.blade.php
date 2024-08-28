@extends('layouts.admin.admin')
@section('admin.content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <a href="{{route('admin.addAmenity')}}" class="btn btn-inverse-success my-3" >Add Amenity </a>
    <h6 class="card-title">Amenities</h6>
     <div class="table-responsive">
      <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTableExample_length"><label>Show <select name="dataTableExample_length" aria-controls="dataTableExample" class="form-select form-select-sm"><option value="10">10</option><option value="30">30</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTableExample_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="dataTableExample"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dataTableExample" class="table dataTable no-footer" aria-describedby="dataTableExample_info">
        <thead>
          <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 144.302px;">Sr</th>
            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 231.854px;">Amenity Name</th>
           </tr>
        </thead>
        <tbody>
       @foreach ($amenity as $key=>$item )
       <tr class="odd">
        <td class="sorting_1">{{$key + 1}}</td>
        <td>{{$item->amenity_name}}</td>
      
         <td>
          <a href="{{route('admin.editProperty',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
          <a href="{{route('admin.deleteAmenity',$item->id)}}" id="delete" class="btn btn-inverse-danger">Delete</a>
         </td>
      </tr>
       @endforeach
         
        </tbody>
      </table></div></div>
    </div>
  </div>
</div>
        </div>
    </div>     
</div>

@endsection