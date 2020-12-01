
@extends('Backend.Layouts.master')

@section('content')

  <style type="text/css">
    .prof li{
      background-color: #1781BF;
      padding:7px;
      margin:3px;
      border-radius: 15px;
    }

    .prof li a{
      color: white;
      padding-left: 15px;

    }

    .table th{
      text-align: center;
    }

    .table td{
      text-align: center;
    }

    .table td .order_deny{
      background-color: #f92525;
      color: white;
      padding: 5px 10px 5px 10px;
      border-radius: 20px; 
    }

    .table td .order_confirm{
      background-color: #06ad29;
      color: white;
      padding: 5px 10px 5px 10px;
      border-radius: 20px; 
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
                <h3>Approved events list</h3>
              </div><!-- /.card-header -->

              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped" style="text-align: center;">
                      <thead>
                        <tr>
                          <th>Sl.</th>
                          <th>Event name</th>
                          <th>Date</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>

                      @foreach ($events as $key=> $event)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$event->event_name}}</td>
                        <td>{{$event->event_date }}</td>
                        <td>
                            <img src="{{(!empty($event->image))?url('public/Upload/Event_images/'.$event->image):
                           url('public/Upload/no_image.png') }}"
                           style="height: 60px; width: 100px; border: 1px solid #000;" alt="User profile picture">
                        </td>
                        
                        <td>
                          <a title="Details" href="{{ route('events.details', $event->id) }}" class="btn btn-primary btn-sm"> Details</a>

                           <a title="Delete" id="delete" href="{{ route('events.delete', $event->id) }}" class="btn btn-sm btn-danger"
                           >Delete</a>
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

