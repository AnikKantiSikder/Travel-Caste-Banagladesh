
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
            <h1 class="m-0 text-dark">Manage Hotel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">hotel</li>
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
                <h3>
                  @if (isset($editData))
                    Edit hotel information
                  @else
                  Add hotel
                  @endif
                  
                  <a class="btn btn-success btn-sm float-right" href="{{ route('hotels.view') }}">
                    <i class="fa fa-list"></i>
                    Hotel list
                  </a>

                </h3>
              </div><!-- /.card-header -->

              <div class="card-body">

                <form method="POST"
                   action="
                    @if (isset($editData))
                      {{ route('hotels.update',$editData->id) }}
                    @else
                      {{ route('hotels.store')}}
                     
                   @endif" 
                    id="myForm" enctype="multipart/form-data">

                   @csrf
                  


                  <div class="container">
                      <div class="row">

                        <div class="col-md-6">
                          <label for="description">Hotel name</label>
                          <input type="text" name="hotel_name" value="{{@$editData->hotel_name}}" class="form-control" placeholder="Write hotel name">

                          <font color="red">
                            {{
                              ($errors->has('hotel_name'))?($errors->first('hotel_name')):''
                            }}
                          </font>
                        </div>

                        <div class="col-md-6">
                          <label for="hotel address">Hotel address</label>
                          <input type="text" name="hotel_address" value="{{@$editData->hotel_address}}" class="form-control" placeholder="Write hotel address">

                          <font color="red">
                            {{
                              ($errors->has('hotel_address'))?($errors->first('hotel_address')):''
                            }}
                          </font>
                        </div>

                        <div class="col-md-6">
                        <label for="hotel type">Hotel type</label>
                        <select name="hotel_type" class="form-control">

                          <option value="">Select type</option>
                          <option value="One star" {{(@$editData->hotel_type =="One star")?"selected":""}} >One star</option>
                          <option value="Two star" {{(@$editData->hotel_type =="Two star")?"selected":""}}>Two star</option>
                          <option value="Three star" {{(@$editData->hotel_type =="Three star")?"selected":""}}>Three star</option>
                          <option value="Four star" {{(@$editData->hotel_type =="Four star")?"selected":""}}>Four star</option>
                          <option value="Five star" {{(@$editData->hotel_type =="Five star")?"selected":""}}>Five star</option>

                        </select>
                        </div>

                        <div class="col-md-6" >
                          
                         {{--  <input type="submit" value="submit" class="btn btn-md btn-primary" style="margin-top: 32px; width: 150px;"> --}}
                          <button type="submit" class="btn btn-primary" style="margin-top: 32px; width: 150px;">
                              @if (isset($editData))
                                Update
                              @else
                              Submit
                              @endif
                          </button>
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


{{-- <script>
  
$(function () {
  

  $('#myForm').validate({
    rules: {

      name: {
        required: true,
      },
    },
    messages: {

    },

    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script> --}}

@endsection

 