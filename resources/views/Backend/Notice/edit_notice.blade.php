
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
            <h1 class="m-0 text-dark">Manage notice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">notice</li>
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
                <h3>Edit notice
                  <a class="btn btn-success btn-sm float-right" href="{{ route('notices.view') }}">
                    <i class="fa fa-list"></i>
                    Notice list
                  </a>

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">

                  <form method="POST" action="{{ route('notices.update', $editNoticeData->id) }}" id="myForm">
                  @csrf
                  

                    <div class="row">
                      <div class="col-md-4">
                        <label for="heading">Heading</label>
                        <input type="text" name="heading" value="{{$editNoticeData->heading}}" class="form-control">
                      </div>

                      <div class="col-md-8">
                        <label for="details">Details</label>
                        <textarea name="details" class="form-control" rows="5">
                          {{$editNoticeData->details}}
                        </textarea>
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

 