<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/user/css/user.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


  {{-- <link rel="stylesheet" href="{{ asset('//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css')}}">
   --}}
   {{-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> --}}


  {{-- <link href="stylesheet" href="{{asset('assets/cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css')}}"> --}}

  <link href="">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->

  @include('layouts.inc.user-navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  @include('layouts.inc.user-sidebar')

  <!-- Content Wrapper. Contains page content -->


  @yield('content')
  <!-- /.content-wrapper -->


  @include('layouts.inc.user-footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>

<script src="{{asset('assets/user/js/user.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> --}}


{{-- <script type=”text/javascript” href="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script src="http://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js')}}"></script>
<script>
  $(document).ready( function () {
    $('#mydatatable').DataTable();
} );

</script> --}}
</body>
</html>
