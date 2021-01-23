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
    background-color: #d9e009;
    color: black;
  }
</style>

<section class="page-section ok" id="exploreCard" style="margin-top: 50px;">
    <div class="container">
            <div class="row">
              {{-- @php
                $userName= App\User::where('id',auth()->user()->id)->first();
              @endphp --}}
                <div class=" col-md-10 mx-auto">
                   <h2>
                     <h2>Your posts</h2>
                   </h2>
                  <br><br>
                </div>

                <div class="col-md-2">
                  <a class="btn btn-secondary btn-sm float-right" href="{{ route('customerprofiles.view')}}">
                    <i class="fa fa-user"></i>
                    My profile
                  </a>
                </div>
            </div><hr><br>

            {{-- View personal posts --}}

            <div class="row postSection">
              @foreach ($allData as $key=> $customerPostData)
              <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{(!empty($customerPostData->image))?url('public/Upload/Location_images/'.$customerPostData->image):
                         url('public/Upload/no_image.png') }}" alt="Card image cap"style="height: 250px;">
                    <div class="card-body">
                      <h5 class="card-title"><b>{{$customerPostData->location_name}}</b></h5>
                      <p class="card-text">{{str_limit($customerPostData->description)}}</p>
                    </div>
                    <div class="card-footer">
                      <a title="Details" class="btn btn-success"
                      href="{{ route('location.details.info',$customerPostData->slug) }}">
                      <i class="fa fa-eye"></i></a>

                      <a title="Edit" class="btn btn-primary"
                      href="{{ route('customer.edit.post', $customerPostData->id) }}">
                      <i class="fa fa-edit"></i></a>

                      <a title="Delete" id="delete" class="btn btn-danger"
                      href="{{ route('customer.delete.post', $customerPostData->id) }}">
                      <i class="fa fa-trash"></i></a>
                    </div>
                </div>
              </div>
              @endforeach
           </div>






      </div>
  </section>


@endsection
