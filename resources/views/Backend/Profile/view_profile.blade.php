
@extends('Backend.Layouts.master')

@section('content')
<!-- Main contents starts here -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #ace5da;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage profile</h1>
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
          <section class="col-lg-4 offset-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"

                       src="{{(!empty($userData->image))?url('public/Upload/User_images/'.$userData->image):
                        url('public/Upload/no_image.png') }}"

                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$userData->name}}</h3>

                <p class="text-muted text-center">{{$userData->address}}</p>

                  <table width="100%" class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Mobile no</td>
                        <td>{{$userData->mobile}}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>{{$userData->email}}</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>{{$userData->gender}}</td>
                      </tr>
                    </tbody>
                  </table>

                <a href="{{ route('profiles.edit') }}" class="btn btn-primary btn-block"><b>Edit profile</b></a>
              </div>
              <!-- /.card-body -->
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

<!-- Main content ends here -->
@endsection

