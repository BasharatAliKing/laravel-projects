 @extends('layouts.admin')
 @section('admin.content')
 <div class="page-content">
    <div class="row">
       <div class="col-md-6 grid-margin stretch-card">
         <div class="card">
           <div class="card-body">
       
             <h6 class="card-title">Add Amenity</h6>
       
             <form class="forms-sample" method="POST" action="{{route('admin.addAmen')}}">
               @csrf
               <div class="form-group mb-3">
                 <label for="name" class="form-label">Property Name</label>
                 <input  type="text" value="" class="form-control" name="amenity_name" placeholder="Amenity name" >
             </div>
             
               <button type="submit" class="btn btn-primary me-2">Add Amenity</button>
             </form>
       
           </div>
         </div>
       </div>    </div>
    
 
      
 </div>
 @endsection