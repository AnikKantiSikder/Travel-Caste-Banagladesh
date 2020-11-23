
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
            <h1 class="m-0 text-dark">Manage customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer</li>
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
                <h3>Customer list
                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone number</th>
                        </tr>
                      </thead>

                      <tbody>

                      @foreach ($allCustomerData as $key=> $customer)
                      <tr>
                        <td> {{$key+1}} </td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->mobile}}</td>
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

