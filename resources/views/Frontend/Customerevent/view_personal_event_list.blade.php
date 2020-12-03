@extends('Frontend.Layouts.master')

@section('content')

<style type="text/css">
  .container{
    padding-top: 20px;
    height: auto;
    font-family: Arial, Helvetica, sans-serif;
  }

  .postSection{
    margin-bottom: 50vh;
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
              <div class=" col-md-10 mx-auto">
                 <h2>Your tour events</h2>
                <br><br>
              </div>
              <div class="col-md-2">
                  <a class="btn btn-secondary btn-sm float-right"
                    href="{{ route('customerprofiles.view')}}">
                    <i class="fa fa-user"></i>
                    My profile
                  </a>
                </div>
          </div>
          <br>
          <div class="jumbotron text-center ">
            <div class="container">
                <div class="row">
                  @foreach ($allData as $customerEventData)
                    <div class="col-sm-4">

                      <div class="card">
                        <img class="card-img-top" src="{{(!empty($customerEventData->image))?url('public/Upload/Event_images/'.$customerEventData->image):
                             url('public/Upload/no_image.png') }}" alt="Card image cap"style="height: 150px;">
                        <div class="card-body">
                          <h5 class="card-title"><b>{{$customerEventData->event_name}}</b></h5>
                          <p class="card-text">{{$customerEventData->event_date}}</p>
                        </div>
                        <div class="card-footer">
                           <a title="Details" class="btn btn-sm btn-success"
                             href="{{ route('tour.event.details',$customerEventData->slug) }}">
                            <i class="fa fa-eye"></i></a>

                            <a title="Edit" class="btn btn-sm btn-info"
                             href="{{ route('customer.edit.event', $customerEventData->id) }}">
                            <i class="fa fa-edit"></i></a>
                            
                            <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                             href="{{ route('customer.delete.event', $customerEventData->id) }}">
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
