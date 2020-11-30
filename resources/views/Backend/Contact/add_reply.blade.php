
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
            <h1 class="m-0 text-dark">Manage communication</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">communication</li>
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
                <h3>Reply to customer
                  <a class="btn btn-success btn-sm float-right" href="{{ route('contacts.communicate') }}">
                    <i class="fa fa-list"></i>
                     Message list
                  </a>
                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">

                  <form method="post" action="{{-- {{ route('contacts.update', $editContactData->id) }} --}}" id="myForm">
                  @csrf

                      <div class="row">

                      <div class="col-md-12">
                        <label for="reply">Reply</label>
                        <textarea rows="6" name="reply" class="form-control"></textarea>
                      </div>

                      <div class="row" style="padding-top: 20px;">
                         <div class="col-md-12">
                          
                        <input type="submit" value="sent" class="btn btn-md btn-primary"
                         style="width: 100px;text-align: center;">
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

 