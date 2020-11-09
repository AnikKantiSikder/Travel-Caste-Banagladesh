
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
            <h1 class="m-0 text-dark">Edit slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">slider</li>
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
                <h3>Edit slider
                  <a class="btn btn-success btn-sm float-right" href="{{ route('sliders.view') }}">
                    <i class="fa fa-list"></i>
                    Slider list
                  </a>

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">

                  <form method="POST" action="{{ route('sliders.update', $editSliderData->id) }}" id="myForm" enctype="multipart/form-data">
                  @csrf
                  

                    <div class="row">
                      <div class="col-md-3">
                        <label for="shortTitle">Short title</label>
                        <input type="text" value="{{$editSliderData->short_title}}" name="short_title" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <label for="longTitle">Long title</label>
                        <input type="text" value="{{$editSliderData->long_title}}" name="long_title" class="form-control">
                      </div>

                      <div class="col-md-3">
                        <label for="formGroupExampleInput">Change logo</label>
                        <input type="file" name="image" class="form-control" id="image">
                      </div>

                      <div class="col-md-3">

                      <img id="show_image"

                       src="{{(!empty($editSliderData->image))?url('public/Upload/Slider_images/'.$editSliderData->image):
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



@endsection

 