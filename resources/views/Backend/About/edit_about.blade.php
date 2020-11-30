
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
            <h1 class="m-0 text-dark">Manage About Us</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">about us</li>
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
                <h3>Edit about us
                  <a class="btn btn-success btn-sm float-right" href="{{ route('abouts.view') }}">
                    <i class="fa fa-list"></i>
                    About us list
                  </a>

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">

                  <form method="POST" action="{{ route('abouts.update', $editAboutData->id) }}" id="myForm" enctype="multipart/form-data">
                  @csrf
                  

                    <div class="row">

                      {{-- Introduction --}}
                      <div class="col-md-12">
                        <label for="introduction">Introduction</label>
                        <textarea rows="3" name="introduction" class="form-control">
                          {{$editAboutData->introduction}}
                        </textarea>
                      </div>
                      {{-- Services --}}
                      <div class="col-md-12">
                        <label for="service">Service</label>
                        <textarea rows="3" name="service" class="form-control">
                          {{$editAboutData->service}}
                        </textarea>
                      </div>
                      {{-- Instruction --}}
                      <div class="col-md-12">
                        <label for="instruction">Instruction</label>
                        <textarea rows="3" name="instruction" class="form-control">
                          {{$editAboutData->instruction}}
                        </textarea>
                      </div>
                      {{-- Enjoy --}}
                      <div class="col-md-12">
                        <label for="enjoy">Enjoy</label>
                        <textarea rows="3" name="enjoy" class="form-control">
                          {{$editAboutData->enjoy}}
                        </textarea>
                      </div>
                      {{-- Conclusion --}}
                      <div class="col-md-12">
                        <label for="conclusion">Conclusion</label>
                        <textarea rows="3" name="conclusion" class="form-control">
                          {{$editAboutData->conclusion}}
                        </textarea>
                      </div>

                      <div class="row" style="padding-top: 20px;">
                         <div class="col-md-12">
                          
                        <input type="submit" value="update" class="btn btn-md btn-primary"
                         style="width: 200px;text-align: center;">
                        </div>
                      </div>
                      
                    </div> 
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

 