 
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
            <h1 class="m-0 text-dark">Manage customer event</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">events</li>
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
                <h3>Event details

                  <a class="btn btn-success btn-sm float-right" style="margin-left: 10px;" href="{{ route('events.approved.list') }}">
                    <i class="fa fa-list"></i>
                    Approved list
                  </a>
                  
                  <a class="btn btn-success btn-sm float-right" href="{{ route('events.pending.list') }}">
                    <i class="fa fa-list"></i>
                    Pending list
                  </a>
                  
                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">
                <table class="table table-bordered table-hover table-sm">
                   <tbody>
                    <tr style="text-align: justify;">
                       <td width="20%"><b>Created by</b></td>
                       <td width="80%" class="data">{{$eventDetails->created_by}}</td>
                    </tr>
                     <tr>
                       <td width="20%"><b>Event name</b></td>
                       <td width="80%">{{$eventDetails->event_name}}</td>
                     </tr>
                     <tr>
                       <td width="20%"><b>Event date</b></td>
                       <td width="80%">{{$eventDetails->event_date}}</td>
                     </tr>
                     <tr>
                       <td width="20%"><b>Location type</b></td>
                       <td width="80%">{{$eventDetails['category']['name'] }}</td>
                     </tr>
                     <tr>
                       <td width="20%"><b>Division</b></td>
                       <td width="80%">{{$eventDetails['division']['name'] }}</td>
                     </tr>
                    <tr>
                       <td width="20%"><b>District</b></td>
                       <td width="80%">{{$eventDetails->district_name}}</td>
                    </tr>
                    <tr style="text-align: justify;">
                       <td width="20%"><b>Description</b></td>
                       <td width="80%" class="data">{{$eventDetails->details}}</td>
                     </tr>
                    <tr style="text-align: justify;">
                       <td width="20%"><b>Suggestion</b></td>
                       <td width="80%" class="data">{{$eventDetails->suggestion}}</td>
                    </tr>
                    <tr style="text-align: justify;">
                       <td width="20%"><b>Total members</b></td>
                       <td width="80%" class="data">{{$eventDetails->no_members}}</td>
                    </tr>
                    <tr style="text-align: justify;">
                       <td width="20%"><b>Cost per person</b></td>
                       <td width="80%" class="data">{{$eventDetails->cost}}</td>
                    </tr>
                    <tr style="text-align: justify;">
                       <td width="20%"><b>Contact manager</b></td>
                       <td width="80%" class="data">{{$eventDetails->contact_number}}</td>
                    </tr>
                    <tr>
                       <td width="20%"><b>Image</b></td>
                       <td width="80%">
                         <img src="{{(!empty($eventDetails->image))?url('public/Upload/Event_images/'.$eventDetails->image):
                         url('public/Upload/no_image.png') }}"
                         style="height: 100px; width: 150px; border: 1px solid #000;" alt="location">
                       </td>
                    </tr>
                     <tr>
                       <td><b>Additional images</b></td>
                       <td>
                         @php
                           $subImages= App\Model\EventSubImage::where('event_id', $eventDetails->id)->get();
                         @endphp
                         @foreach ($subImages as $imgs)
                         <img src="{{url('public/Upload/Event_images/Event_sub_images/'.$imgs->sub_image) }}"
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

