@extends('Frontend.Layouts.master')

@section('content')


<section class="bg-light page-section ok" id="exploreCard" style="margin-top: 50px;">
    <div class="container">
      
      
  <div class="row">
      <div class=" col-md-12 mx-auto">
         <h2>Current tour events</h2>
        <br><br>
      </div>
  </div>
  <br>
   <div class="jumbotron text-center ">
      <div class="container">
          <div class="row">
            @foreach ($events as $allEventData)
              <div class="col-sm-4">
                  <div class="card" style="background-color: #76d7c4;height: auto;">
                    <div class="card-body">
                      <h5 class="card-title">{{$allEventData->event_name}}</h5>
                      <p class="card-text">{{$allEventData->event_date}}</p>
                      <p class="card-text">{{$allEventData->cost}} Tk</p>
                      <a href="{{ route('tour.event.details',$allEventData->slug) }}" class="btn btn-success">See details</a>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
          <br> 

      </div>
    </div>
            

      </div>
  </section>


@endsection
