
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
              <li class="breadcrumb-item active">User</li>
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
                <h3>Edit user
                  <a class="btn btn-success btn-sm float-right" href="{{ route('users.view') }}">
                    <i class="fa fa-list"></i>
                    User list
                  </a>

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">

                  <form method="post" action="{{ route('users.update',$editData->id) }}" id="myForm">
                  @csrf
                      
                    <div class="form-row">
                      <div class="col">
                        <label for="userrole">Role</label>

                        <select name="userrole" class="form-control">
                          <option value="">Select role</option>

                          <option value="admin" {{($editData->role =="admin")?"selected":""}} >admin</option>
                          <option value="user" {{($editData->role =="user")?"selected":""}}>user</option>

                        </select>

                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" name="name" value="{{$editData->name}}" class="form-control"
                        placeholder="User name">
                        <font style="color: red;">
                          {{($errors->has('name'))?($errors->first('name')):''}}
                        </font>
                      </div>
                       <div class="col">
                        <label for="formGroupExampleInput">Email</label>
                        <input class="form-control" type="email" name="email" value="{{$editData->email}}"
                        placeholder="Email address">
                        <font style="color: red;">
                          {{($errors->has('email'))?($errors->first('email')):''}}
                        </font>
                      </div>
                    </div><br>

                    <button type="submit" class="btn btn-md btn-success float-right">Update</button>
                    
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
          required: "Please select an user role",
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

 