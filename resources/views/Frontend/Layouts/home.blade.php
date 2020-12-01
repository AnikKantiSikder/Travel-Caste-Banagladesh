

@extends('Frontend.Layouts.master')
  @section('content')
    @include('Frontend.Layouts.slider')

    <style type="text/css">
      .notice .container{
        height: auto;
        padding: 20px;
        margin-bottom: 50px;
        background-color: #7DC242;
        margin-bottom: 1px solid blue;
      }
      .notice h2{
        color: black;
      }
      .notice .date{
        color: black;
        text-align: right;
      }
      .notice .infoOne{
        color: black;
        text-align: justify;
      }
      .notice .infoTwo{
        color: black;
        text-align: justify;
      }
      .notice .infoTwo h3{
        color: white;
      }

      .card{
        margin-bottom: 30px;
      }

      .homeEvent{
        height: auto;
        padding: 20px;
        background-color: #dede19;
        border: 2px solid #c2c2ab;
        border-radius: 20px;
        color: black;
      }
      .homeEvent img{
        height: 15vh;
        width: 100%;
      }
      .card{
      filter: grayscale(50%);
      transition: 1s;
      }
      .card:hover{
        filter: grayscale(0);
        transform: scale(1.1);
        background-color: #fff407;
      }
    </style>
    <br><br>  
    {{--  #0ffae2  ffc707--}}

  <section class="notice">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center">Noticeboard</h2>
          </div>
          <div class="col-md-12 date">Date: <b>{{date('d-m-Y')}}</b></div>
        </div>

        <div class="row">
          <div class="col-md-6 infoOne">
            <h3>Covid 19 (Bangladesh)</h3><hr>
            Confirmed: 436,684<br>New cases: +2,212<br>Recovered: 352,895<br>Death: +6,254 
          </div>

          <div class="col-md-6 infoTwo">
            <h3>Notice 1:</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
            <h3>Notice 2:</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
  </section>



  <!-- Location category -->
    <section>
      <div class="container">

        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><b>Explore Bangladesh</b></h2>
            <h3 class="section-subheading text-muted">welcome to heaven</h3>
        </div><br><br><hr>

        <div class="row" style="padding: 10px;">
          <div class="col-md-12">

            <a href="{{ route('locations.list') }}" class="btn btn-danger">
              <b>All locations</b>
            </a>


            @foreach ($categories as $category)
              <a href="{{ route('category.wise.location',$category->category_id) }}" style="margin-left: 30px;"><b>{{$category['category']['name']}}</b></a>
            @endforeach
            
          </div>
        </div><hr><br>

      </div>
    </section>
  <!-- Location category -->



  <!-- Explore Bangladesh -->
  <section class="">
    <div class="container">
      <div class="row">
        @foreach ($locations as $allLocationData)
          <div class="col-md-4">
              <div class="card">
                  <img class="card-img-top" src="{{ url('public/Upload/Location_images/'.$allLocationData->image) }}"
                  alt="Card image cap"style="height: 200px;">
                  <div class="card-body">
                    <h5 class="card-title"><b>{{$allLocationData->location_name}}</b></h5>
                    <p class="card-text">{{str_limit($allLocationData->description)}}</p>
                  </div>
                  <div class="card-footer">
                    <a class="btn btn-success" href="{{ route('location.details.info',$allLocationData->slug) }}">
                      See details
                    </a>
                  </div>
              </div>
          </div>
        @endforeach
      </div>
      <!-- Paginate function -->
      {{$locations->links()}}
    </div>
  </section>
  <!-- Explore Bangladesh -->



<!-- Tourevents -->
    <section class="page-section" id="tourevents">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> <b>Tour events</b> </h2>
            <h3 class="section-subheading text-muted">See and join on the running tour events</h3>
          </div>
        </div><hr>

     <div class="jumbotron text-center ">
        <div class="container">
            <div class="row">
              @foreach ($eventsData as $allEventData)

              <div class="col-md-6 homeEvent">
                <div class="row">
                  <div class="col-md-4">
                    <img class="" src="{{url('public/Upload/Event_images/'.$allEventData->image) }}">
                  </div>

                  <div class="col-md-6">
                      <h5>{{$allEventData->event_name}}</h5>
                      <p class="card-text">{{$allEventData->event_date}}</p>
                      <p class="card-text">{{$allEventData->cost}} Tk</p>
                      <a href="{{ route('tour.event.details',$allEventData->slug) }}"
                        class="btn btn-success">See details</a>
                  </div>
                </div>
              </div>

              @endforeach
            </div>
            <br><br>
            
            <a href="{{ route('tour.events') }}" class="btn btn-lg btn-secondary">
              See more <i class="fa fa-plus-circle"></i></a>
        </div>
      </div>

      </div>
    </section>


  @endsection


