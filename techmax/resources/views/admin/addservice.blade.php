@extends('layouts.admin.app')
@section('contents')
   <div class="container">
    <div class="row">
        <div class="col-md-6 shadow border p-3">
            <h1 class="text-4xl font-semibold text-black text-center my-3">Add Service</h1>
            <form action="{{route('serviceadd')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Service Image</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group" >
                    <label for="">Service Name</label>
                    <input type="text" name="service_name" class="form-control">
                </div>
                <div class="form-group" >
                    <label for="">Service Description</label>
                     <textarea name="service_des" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group" >
                    <label for="">Service Long Des...</label>
                     <textarea name="service_longdes" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <button onclick="addtocart()" class="btn btn-sm btn-success bg-green mt-3">Add Service</button>
             </form>
        </div>
    </div>
   </div>
@endsection
{{-- <script>
     function addToCart(id,plan){
      const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
        fetch('/addToCart',{
            method: 'POST'
                , headers: {
                    'Content-Type': 'application/json'
                    , 'X-CSRF-TOKEN': csrfToken
                }
                , body: JSON.stringify(payload)
        })
        .then( res => {
            return res.json();
        })
        .then((data) => {
             if(data){
                Swal.fire({
                icon: 'success',
                title: 'Add To Cart',
                text: 'Product Added To Cart Sucessfuly!',
                })
                setTimeout(function(){
   window.location.reload();
},2000);
            }else{
                window.location.replace("share_balance");
            }
        });
    }

</script> --}}