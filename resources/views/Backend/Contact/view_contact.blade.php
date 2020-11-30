
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
              <li class="breadcrumb-item active">contact</li>
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
                <h3>Contact list
                  @if($countContact<1)
                  <a class="btn btn-success btn-sm float-right" href="{{ route('contacts.add') }}">
                    <i class="fa fa-plus-circle"></i>
                    Add contact
                  </a>
                  @endif

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">
                <table  class="table table-bordered table-hover table-responsive" style="text-align: center;">
                      <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Address</th>
                          <th>Facebook</th>
                          <th>Twitter</th>
                          <th>Youtube</th>
                          <th>Google plus</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>

                      @foreach ($allData as $key=> $contact)
                      <tr>
                        <td> {{$key+1}} </td>

                        <td>{{$contact->email}}</td>
                        <td>{{$contact->mobile}}</td>
                        <td>{{$contact->address}}</td>
                        <td>{{$contact->facebook}}</td>
                        <td>{{$contact->twitter}}</td>
                        <td>{{$contact->youtube}}</td>
                        <td>{{$contact->google_plus}}</td>

                        <td>
                          <a title="Edit" class="btn btn-sm btn-info"
                           href="{{ route('contacts.edit', $contact->id) }}">
                          <i class="fa fa-edit"></i></a><br><br>
                          
                          <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                           href="{{ route('contacts.delete', $contact->id) }}">
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

