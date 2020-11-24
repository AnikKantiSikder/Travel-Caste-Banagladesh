
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
                  <h3>
                    @if (isset($editLocationData))
                      Edit location
                    @else
                    Add location
                    @endif
                    
                    <a class="btn btn-success btn-sm float-right" href="{{ route('locations.view') }}">
                      <i class="fa fa-list"></i>
                      Location list
                    </a>

                  </h3>
                </div><!-- /.card-header -->

            <div class="card-body">

                  <form method="POST"
                           action="
                            @if (isset($editLocationData))
                              {{ route('locations.update',$editLocationData->id) }}
                            @else
                              {{ route('locations.store') }}
                             
                           @endif" 
                            id="myForm" enctype="multipart/form-data">

                          @csrf
                    


                  <div class="container-fluid">
                          <div class="row">

      <!--Location name------------------------------------------------------------------------------------------>
                            <div class="col-md-6">
                              <label for="name">Location name</label>
                              <input type="text" name="location_name" value="{{@$editLocationData->location_name}}"
                              class="form-control" placeholder="Write location name">

                              <font color="red">
                                {{
                                  ($errors->has('location_name'))?($errors->first('location_name')):''
                                }}
                              </font>
                            </div>
      <!--Category----------------------------------------------------------------------------------------------->
                            <div class="col-md-6">
                              <label for="category">Category</label>
                              <select name="category_id" class="form-control">
                                <option>Select category</option>

                                @foreach ($categories as $category)
                                  <option value="{{$category->id}}"
                                    {{(@$editLocationData->category_id==$category->id)?"selected":""}}>
                                    {{$category->name}}
                                  </option>
                                @endforeach
                              </select>
                              
                              <font color="red">
                                {{
                                  ($errors->has('category_id'))?($errors->first('category_id')):''
                                }}
                              </font>
                            </div>
      <!--Division----------------------------------------------------------------------------------------------->
                            <div class="col-md-6">
                              <label for="division">Division</label>
                              <select name="division_id" class="form-control">
                                <option>Select division</option>

                                @foreach ($divisions as $division)
                                  <option value="{{$division->id}}"
                                    {{(@$editLocationData->division_id==$division->id)?"selected":""}}>
                                    {{$division->name}}
                                  </option>
                                @endforeach
                              </select>
                              
                              <font color="red">
                                {{
                                  ($errors->has('division_id'))?($errors->first('division_id')):''
                                }}
                              </font>
                            </div>
      <!--District name------------------------------------------------------------------------------------------->
                            <div class="col-md-6">
                              <label for="district">District name</label>
                              <input type="text" name="district_name" value="{{@$editLocationData->district_name }}"
                              class="form-control" placeholder="Write district name">

                              <font color="red">
                                {{
                                  ($errors->has('district_name'))?($errors->first('district_name')):''
                                }}
                              </font>
                            </div>

      <!--Description------------------------------------------------------------->

                            <div class="col-md-12">
                              <label for="description">Description</label>
                              <textarea name="description" class="form-control" rows="5">
                                {{@$editLocationData->description}}
                              </textarea>

                              <font color="red">
                                {{
                                  ($errors->has('description'))?($errors->first('description')):''
                                }}
                              </font>
                            </div>
      <!--Suggestion------------------------------------------------------------->

                            <div class="col-md-12" style="margin-bottom: 15px;">
                              <label for="suggestion">Suggestion</label>
                              <textarea name="suggestion" class="form-control" rows="5">
                                {{@$editLocationData->suggestion}}
                              </textarea>

                              <font color="red">
                                {{
                                  ($errors->has('suggestion'))?($errors->first('suggestion')):''
                                }}
                              </font>
                            </div>

      <!--Google map input------------------------------------------------------->                  
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="form-control-label" for="">Map</label>
                              <input type="text" class="form-control form-control-alternative" id="searchmap" placeholder="Enter The Location">
                              <div id="map" style="height:400px"></div>
                            </div>
                          </div>
                          <input type="hidden" class="form-control input-sm"  name="latitude" id="latitude">
                          <input type="hidden" class="form-control input-sm"  name="longitude" id="longitude">
                       

      <!--Image------------------------------------------------------------->
                            <div class="col-md-4">
                              <label for="image">Image</label>
                              <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <div class="col-md-4" style="text-align: center;">
                              <img id="show_image"

                               src="{{(!empty($editLocationData->image))?url('public/Upload/Location_images/'.$editLocationData->image):url('public/Upload/no_image.png') }}"
                               style="height: 120px; width: 200px; border: 1px solid #000;" alt="User profile picture">
                            </div>

                            <div class="col-md-4">
                              <label for="image">Sub image</label>
                              <input type="file" name="sub_image[]" class="form-control" multiple>
                            </div>

                        </div>
                        <div class="row">
                          <div class="col-md-12" >
                            
                           {{--  <input type="submit" value="submit" class="btn btn-md btn-primary" style="margin-top: 32px; width: 150px;"> --}}
                            <button type="submit" class="btn btn-primary" style="margin-top: 32px; width: 150px;">
                                @if (isset($editLocationData))
                                  Update
                                @else
                                Submit
                                @endif
                            </button>
                          </div>
                        </div>

                  </div>
                </form>
            </div>

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

<script>
  
$(function () {
  

  $('#myForm').validate({
    rules: {

      category_id: {
        required: true,
      }
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
</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initGoogleMap" async defer></script>
    <script type="text/javascript">
      function initGoogleMap() {
        var bd = {
          lat: 23.81952496686278,
          lng: 90.41794259257813
          };
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: bd
          });
          var marker = new google.maps.Marker({
            position: bd,
            map: map,
            draggable: true,
          });
          var input = document.getElementById('searchmap');
          var searchBox = new google.maps.places.SearchBox(input);
          google.maps.event.addListener(searchBox,'places_changed', function() {
          var places = searchBox.getPlaces();
          var bounds = new google.maps.LatLngBounds();
          var i,place;
          for (i = 0; place = places[i]; i++) {
            bounds.extend(place.geometry.location);
            marker.setPosition(place.geometry.location);
          }
          });
          google.maps.event.addListener(marker,'position_changed', function() {
            var lat = marker.getPosition().lat();
            var long = marker.getPosition().lng();
            $('#latitude').val(lat);
            $('#longitude').val(long);
          });
        }
    </script>

@endsection

 