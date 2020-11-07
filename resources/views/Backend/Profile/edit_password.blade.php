
@extends('Backend.Layouts.master')

@section('content')
<!-- Main contents starts here -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Change password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->

            <div class="card">
              <div class="card-header">
                <h3>Edit password
                  <a class="btn btn-success btn-sm float-right" href="{{ route('profiles.view') }}">
                    <i class="fa fa-list"></i>
                    Your profile
                  </a>

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">

                  <form method="POST" action="{{ route('profiles.password.update') }}" id="myForm" enctype="multipart/form-data">
                  @csrf
                  
                    <div class="row">

                      <div class="col-md-4">
                        <label for="current_password">Current password</label>
                        <input type="password" name="current_password"  class="form-control" placeholder="Your current password" id="current_password" >
                      </div>

                      <div class="col-md-4">
                        <label for="new_password">New password</label>
                        <input class="form-control" type="password"  name="new_password" placeholder="Your new password" id="new_password">
                      </div>
 
                      <div class="col-md-4">
                        <label for="confirm_new_password">Confirm new password</label>
                        <input class="form-control" type="password" name="confirm_new_password" placeholder="User mobile" id="confirm_new_password">
                      </div>

                    </div><br>


                    
                      
                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                    
                  </form>
              </div><!-- /.card-body -->
            </div>

            <!-- /.card -->
          </section>
          <!-- /.Left col -->

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Page specific script -->
<script>
  
$(function () {
  
  // $.validator.setDefaults({
  //   submitHandler: function () {
  //     alert( "Form successful submitted!" );
  //   }
  // });

  $('#myForm').validate({
    rules: {
      current_password: {
        required: true,
        
      },
      new_password: {
        required: true,
        minlength: 6
      },
      confirm_new_password: {
        required: true,
        equalTo: '#new_password'
      },
    },
    messages: {
      current_password: {
        required: "Please provide your current password",
        minlength: "Your password must be at least 6 characters long"
      },
      new_password: {
        required: "Please provide a new password",
        minlength: "Your password must be at least 6 characters long"
      },
      confirm_new_password: {
        required: "Please confirm your new password",
        equalTo: "Your confirm password doesn't match"
      },
      

    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>


@endsection

 