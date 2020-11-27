<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Travel caste Bangladesh</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('public/Backend/')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- jQuery -->
  <script src="{{asset('public/Backend')}}/plugins/jquery/jquery.min.js"></script>

  <!-- jquery-validation -->
  <script src="{{asset('public/Backend')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="{{asset('public/Backend')}}/plugins/jquery-validation/additional-methods.min.js"></script>

  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('public/Backend')}}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('public/Backend')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  {{-- Sweat alert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <style type="text/css">
    .notify-corner{
      z-index: 10000 !important;
    }
  </style>
  <!-- Notify js -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

  <!--Bootstrap date picker-->
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

 {{--  Sweet alert for (post method delete) --}}
 {{--  <script type="text/javascript" src="{{asset('public/Backend')}}/sweetalert/sweetalert.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('public/Backend')}}/sweetalert/sweetalert.css"> --}}

  @stack('mapapi')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          
          <span> <b>{{Auth::user()->name}}</b> </span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <div class="dropdown-divider"></div>

          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer" style="background-color: red;"><b>Log out</b></a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light"><b>Travel caste Bangladesh</b></span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{(!empty(Auth::user()->image))?url('public/Upload/User_images/'.Auth::user()->image):
                        url('public/Upload/no_image.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('profiles.view') }}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      @include('Backend.Layouts.sidebar')

    </div>
    <!-- /.sidebar -->
  </aside>


@yield('content')

  {{-- Notify js --}}
    @if(session()->has('success'))
      <script type="text/javascript">
        $(function(){
          $.notify("{{session()->get('success')}}", {globalPosition:'top right', className:'success'});
        });
      </script>
    @endif

    @if(session()->has('error'))
      <script type="text/javascript">
        $(function(){
          $.notify("{{session()->get('error')}}", {globalPosition:'top right', className:'error'});
        });
      </script>
    @endif
  {{-- Notify js --}}

  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#" style="color: blue;">Anik kanti sikder</a></strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Design and developed by <i style="color: blue;">Anik kanti sikder</i></b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/Backend')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/Backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('public/Backend')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('public/Backend')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('public/Backend')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('public/Backend')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/Backend')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('public/Backend')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('public/Backend')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/Backend')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('public/Backend')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/Backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/Backend')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/Backend')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/Backend')}}/dist/js/pages/dashboard.js"></script>

<!-- DataTables -->
<script src="{{asset('public/Backend/')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/Backend/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('public/Backend/')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('public/Backend/')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- jquery-validation -->
<script src="{{asset('public/Backend')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('public/Backend')}}/plugins/jquery-validation/additional-methods.min.js"></script>

{{-- Sweat alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Select2 -->
<script src="{{asset('public/Backend')}}/plugins/select2/js/select2.full.min.js"></script>

<!-- Page specific script for datatable -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

{{-- Sweat aleart for delete --}}
<script type="text/javascript">
  $(function(){
    $(document).on('click', '#delete', function(e){
      
      e.preventDefault();
      var link= $(this).attr("href");
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            window.location.href= link;
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
    });
  });
</script>
{{-- Sweat aleart for delete --}}

{{-- Sweat aleart for approve --}}
<script type="text/javascript">
  $(function(){
    $(document).on('click', '#approve', function(e){
      
      e.preventDefault();
      var link= $(this).attr("href");
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#23b634',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, approve it!'
        }).then((result) => {
          if (result.value) {
            window.location.href= link;
            Swal.fire(
              'approved!',
              'Your file has been approved.',
              'success'
            )
          }
        })
    });
  });
</script>
{{-- Sweat aleart for approve --}}

{{-- <script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', '#delete', function(){
      var actionTo= $(this).attr('href');
      var token= $(this).attr('data-token');
      var id= $(this).attr('data-id');
      swal({
        title: "Are you sure ?",
        type: "success",
        showCancelButton: true,
        confirmButtonClass: 'btn-danger',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
      },
        function(isConfirm){
          if(isConfirm){
            $.ajax({
              url:actionTo,
              type: 'post',
              data: {id:id, _token:token},
              success: function(data) {
                swal({
                  title: "Deleted!",
                  type: "success"
                },
                function(isConfirm){
                  if(isConfirm){
                    $('.' + id).fadeOut();
                  }
                });
              }
            });
          } else{
            swal("cancelled", "", "error");
          }
        });
      return false;
    });
  });
</script>
 --}}


{{-- Sweat aleart for approve --}}
<script type="text/javascript">
  $(function(){
    $(document).on('click', '#approve', function(e){
      
      e.preventDefault();
      var link= $(this).attr("href");
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, approve it!'
        }).then((result) => {
          if (result.value) {
            window.location.href= link;
            Swal.fire(
              'approved!',
              'Your file has been approved.',
              'success'
            )
          }
        })
    });
  });
</script>
{{-- Sweat aleart for approve --}}


<script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader= new FileReader();
      reader.onload= function(e){
        $('#show_image').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>

<script type="text/javascript">

  //Initialize Select2 Elements
  $('.select2').select2()
  
</script>

</body>
</html>
