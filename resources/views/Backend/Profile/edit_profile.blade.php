
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
            <h1 class="m-0 text-dark">Manage user</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
                <h3>Edit profile
                  <a class="btn btn-success btn-sm float-right" href="{{ route('profiles.view') }}">
                    <i class="fa fa-list"></i>
                    Your profile
                  </a>

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">

                  <form method="POST" action="{{ route('profiles.update') }}" id="myForm"
                  enctype="multipart/form-data">
                  @csrf
                  
                    <div class="row">

                      <div class="col-md-4">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" name="name" value="{{$editUser->name}}" class="form-control" placeholder="User name"  >
                      </div>

                      <div class="col-md-4">
                        <label for="formGroupExampleInput">Email</label>
                        <input class="form-control" type="email" value="{{$editUser->email}}" name="email" placeholder="Email address">
                      </div>
 
                      <div class="col-md-4">
                        <label for="formGroupExampleInput">Mobile</label>
                        <input class="form-control" type="text" value="{{$editUser->mobile}}" name="mobile" placeholder="User mobile">
                      </div>

                    </div><br>

         

                    <div class="row">

                      <div class="col-md-3">
                        <label for="formGroupExampleInput">Address</label>
                        <input class="form-control" type="text" value="{{$editUser->address}}" name="address" placeholder="Your address">
                      </div>

                     <div class="col-md-3">
                        <label for="gender">Gender</label>

                        <select name="gender" class="form-control">
                          <option value="">Select gender</option>

                          <option value="Male" {{($editUser->gender =="Male")?"selected":""}} >Male</option>
                          <option value="Female" {{($editUser->gender =="Female")?"selected":""}}>Female</option>

                        </select>
                      </div>

                      <div class="col-md-3">
                        <label for="formGroupExampleInput">Change profile photo</label>
                        <input type="file" name="image" class="form-control" id="image">
                      </div>

                      <div class="col-md-3">

                      <img id="show_image"

                       src="{{(!empty($editUser->image))?url('public/Upload/User_images/'.$editUser->image):
                        url('public/Upload/no_image.png') }}"
                        style="height: 160px; width: 180px; border: 1px solid #000;" alt="User profile picture">


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

      userrole: {
        required: true,
        
      },
      name: {
        required: true,
        
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6
      },
      password_confirmation: {
        required: true,
        equalTo: '#password'
      },
    },
    messages: {
      userrole: {
        required: "Please select an user type",
        
      },
      name: {
        required: "Please enter your name",
        
      },

      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long"
      },
      password_confirmation: {
        required: "Please provide confirm password",
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

 