 
@extends('Backend.Layouts.master')

@section('content')

<style type="text/css">
  .table .data{
    padding: 10px;
  }
</style>
<!-- Main contents starts here -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage customer post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">posts</li>
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
                <h3>Post details
                  
                  <a class="btn btn-success btn-sm float-right" href="{{ route('posts.pending.list') }}">
                    <i class="fa fa-list"></i>
                    Pending list
                  </a>
                  

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">
                <table class="table table-bordered table-hover table-sm">
                   <tbody>
                     <tr>
                       <td width="20%"><b>Name</b></td>
                       <td width="80%">{{$postDetails->location_name}}</td>
                     </tr>
                     <tr>
                       <td width="20%"><b>Category</b></td>
                       <td width="80%">{{$postDetails['category']['name'] }}</td>
                     </tr>
                     <tr>
                       <td width="20%"><b>Division</b></td>
                       <td width="80%">{{$postDetails['division']['name'] }}</td>
                     </tr>
                    <tr>
                       <td width="20%"><b>District</b></td>
                       <td width="80%">{{$postDetails->district_name}}</td>
                    </tr>
                    <tr style="text-align: justify;">
                       <td width="20%"><b>Description</b></td>
                       <td width="80%" class="data">{{$postDetails->description}}</td>
                     </tr>
                    <tr style="text-align: justify;">
                       <td width="20%"><b>Suggestion</b></td>
                       <td width="80%" class="data">{{$postDetails->suggestion}}</td>
                    </tr>
                    <tr style="text-align: justify;">
                       <td width="20%"><b>Nearby hotels</b></td>
                       <td width="80%">
                         @php
                           $hotels= App\Model\Hotel::where('location_id', $postDetails->id)->get();
                         @endphp

                         @foreach ($hotels as $hotel)
                           <b>Name: </b>{{$hotel->hotel_name}} | <b>Address: </b>{{$hotel->hotel_address}} |
                           <b>Type: </b>{{$hotel->hotel_type}} <br>
                         @endforeach
                       </td>
                    </tr>
                    <tr>
                       <td width="20%"><b>Image</b></td>
                       <td width="80%">
                         <img src="{{(!empty($postDetails->image))?url('public/Upload/Location_images/'.$postDetails->image):
                         url('public/Upload/no_image.png') }}"
                         style="height: 100px; width: 150px; border: 1px solid #000;" alt="location">
                       </td>
                    </tr>
                     <tr>
                       <td><b>Additional images</b></td>
                       <td>
                         @php
                           $subImages= App\Model\LocationSubImage::where('location_id', $postDetails->id)->get();
                         @endphp
                         @foreach ($subImages as $imgs)
                         <img src="{{url('public/Upload/Location_images/Location_sub_images/'.$imgs->sub_image) }}"
                         style="height: 100px; width: 150px; border: 1px solid #000;" alt="location">
                         @endforeach
                       </td>
                     </tr>

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

