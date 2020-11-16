
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
            <h1 class="m-0 text-dark">Manage Location</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">location</li>
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
                <h3>Location list
                  <a class="btn btn-success btn-sm float-right" href="{{ route('locations.add') }}">
                    <i class="fa fa-plus-circle"></i>
                    Add location
                  </a>

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover" style="text-align: center;">
                      <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Location name</th>
                          <th>Category</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>

                      @foreach ($allData as $key=> $locationData)
                      <tr>
                        <td> {{$key+1}} </td>

                        <td style="text-align: center;">{{$locationData->location_name}}</td>
                        <td style="text-align: center;">{{$locationData['category']['name'] }}</td>
                        <td>
                         <img src="{{(!empty($locationData->image))?url('public/Upload/Location_images/'.$locationData->image):
                         url('public/Upload/no_image.png') }}"
                         style="height: 60px; width: 100px; border: 1px solid #000;" alt="User profile picture">
                        </td>

                        <td>
                          <a title="Details" class="btn btn-sm btn-success"
                           href="{{ route('locations.details', $locationData->id) }}">
                          <i class="fa fa-eye"></i></a>

                          <a title="Edit" class="btn btn-sm btn-info"
                           href="{{ route('locations.edit', $locationData->id) }}">
                          <i class="fa fa-edit"></i></a>
                          
                          <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                           href="{{ route('locations.delete', $locationData->id) }}">
                          <i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>

                </table>
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

<!-- Main content ends here -->
@endsection

