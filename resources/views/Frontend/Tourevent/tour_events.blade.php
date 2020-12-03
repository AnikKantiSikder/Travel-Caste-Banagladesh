@extends('Frontend.Layouts.master')

@section('content')

<style type="text/css">
  .container{
    padding-top: 20px;
    height: auto;
    font-family: Arial, Helvetica, sans-serif;
  }

  .card{
    filter: grayscale(50%);
    transition: 1s;
    margin-bottom: 30px;
  }
  .card:hover{
    filter: grayscale(0);
    transform: scale(1.1);
    background-color: #118c69;
    color: white;
  }
</style>

<section class="eventSection page-section ok" id="exploreCard" style="margin-top: 50px;">
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

                      <div class="card">
                        <img class="card-img-top" src="{{(!empty($allEventData->image))?url('public/Upload/Event_images/'.$allEventData->image):
                             url('public/Upload/no_image.png') }}" alt="Card image cap"style="height: 150px;">
                        <div class="card-body">
                          <h5 class="card-title"><b>{{$allEventData->event_name}}</b></h5>
                          <p class="card-text">{{$allEventData->event_date}}</p>
                        </div>
                        <div class="card-footer">
                           <a title="Details" class="btn btn-sm btn-success"
                             href="{{ route('tour.event.details',$allEventData->slug) }}">
                            <i class="fa fa-eye"></i></a>

                            <a title="Edit" class="btn btn-sm btn-info"
                             href="{{ route('customer.edit.event', $allEventData->id) }}">
                            <i class="fa fa-edit"></i></a>
                            
                            <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                             href="{{ route('customer.delete.event', $allEventData->id) }}">
                            <i class="fa fa-trash"></i></a>
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
