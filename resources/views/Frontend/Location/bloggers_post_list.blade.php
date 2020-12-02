@extends('Frontend.Layouts.master')

@section('content')

<style type="text/css">
  .blogger{
    background: -webkit-linear-gradient(left, #128c6a, #ace5da);
    height: auto;
  }
  .container{
    padding-top: 20px;
    height: auto;
    
  }
  .card{
    margin-bottom: 30px;
    filter: grayscale(50%);
    transition: 1s;
  }
  .card:hover{
    filter: grayscale(0);
    transform: scale(1.1);
    background-color: #b1e825;
    color: black;
  }
</style>

<section class="blogger  page-section ok" id="exploreCard" >
    <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                   <h2>
                     <h2></h2>
                   </h2>
                  <br><br>
                </div>

                
            </div><hr><br>

            {{-- View personal posts --}}

            <div class="row postSection">
              @foreach ($bloggerPostsData as $key=> $postData)
              <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{(!empty($postData->image))?url('public/Upload/Location_images/'.$postData->image):
                         url('public/Upload/no_image.png') }}" alt="Card image cap"style="height: 250px;">
                    <div class="card-body">
                      <h5 class="card-title"><b>{{$postData->location_name}}</b></h5>
                      <p class="card-text">{{str_limit($postData->description)}}</p>
                    </div>
                    <div class="card-footer">
                      <a title="Details" class="btn btn-success"
                      href="{{ route('location.details.info',$postData->slug) }}"> See details</a>
                    </div>
                </div>
              </div>
              @endforeach
           </div>
      </div>
  </section>


@endsection
