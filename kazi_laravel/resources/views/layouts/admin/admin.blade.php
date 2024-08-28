<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>AdminPanel - Royal Estate</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="/admin/assets/vendors/core/core.css">
	<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
<!-- End plugin css for this page -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="/admin/assets/vendors/flatpickr/flatpickr.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="/admin/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="/admin/assets/css/demo2/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="/admin/assets/images/favicon.png" />
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- toastr Links here -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
     
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
     
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  {{-- Jquery Link starts here --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
	<div class="main-wrapper">

		@include('layouts.admin.sidebar')
		<!-- partial -->
	
		<div class="page-wrapper">
					
		@include('layouts.admin.nav')
			<!-- partial -->

			@yield('admin.content')
			
			<!-- partial -->
		
		</div>
	</div>

	<script>
		@if(Session::has('message'))
		var type = "{{ Session::get('alert-type','info') }}"
		switch(type){
		   case 'info':
		   toastr.info(" {{ Session::get('message') }} ");
		   break;
	   
		   case 'success':
		   toastr.success(" {{ Session::get('message') }} ");
		   break;
	   
		   case 'warning':
		   toastr.warning(" {{ Session::get('message') }} ");
		   break;
	   
		   case 'error':
		   toastr.error(" {{ Session::get('message') }} ");
		   break; 
		}
		@endif 
	   </script>
	
	<!-- core:js -->
	<script src="/admin/assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="/admin/assets/vendors/flatpickr/flatpickr.min.js"></script>
  <script src="/admin/assets/vendors/apexcharts/apexcharts.min.js"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="/admin/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="/admin/assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="/admin/assets/js/dashboard-dark.js"></script>
	<!-- End custom js for this page -->

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	
	<script src="/backend/js/code.js"></script>
	<script src="/backend/js/validate.min.js"></script>
	
	
</body>
</html>    