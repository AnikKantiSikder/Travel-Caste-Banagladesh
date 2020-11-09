
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
            <h1 class="m-0 text-dark">Manage Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">cotact</li>
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
                <h3>Add contact
                  <a class="btn btn-success btn-sm float-right" href="{{ route('contacts.view') }}">
                    <i class="fa fa-list"></i>
                    Contact list
                  </a>

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">

                  <form method="POST" action="{{ route('contacts.store') }}" id="myForm" enctype="multipart/form-data">
                  @csrf
                  

                    <div class="row">

                      <div class="col-md-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="twitter">Twitter</label>
                        <input type="text" name="twitter" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="youtube">Youtube</label>
                        <input type="text" name="youtube" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="google plus">Google plus</label>
                        <input type="text" name="google_plus" class="form-control">
                      </div>

                      <div class="col-md-4">
                        
                      </div>

                      <div class="col-md-4" style="text-align: center;">
                       <br>
                        <input type="submit" value="submit" class="btn btn-md btn-primary" style="width: 200px;">
                      </div>
                      

                    </div><br>

                    
                      
                    
                    
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



@endsection

 