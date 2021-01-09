@extends('Frontend.Layouts.master')

@section('content')

<style type="text/css">
    .card{
        margin-bottom: 30px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .section-heading{
      margin-top: 30px;
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


  <!-- Location division -->
    <section>
      <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><b>Division wise location</b></h2>
        </div><br><br><hr>

        <div class="row" style="padding: 10px;">
          <div class="col-md-12">

            <a href="{{ route('locations.list') }}" class="btn btn-danger">
              <b>All locations</b>
            </a>

            @foreach ($categories as $category)
              <a href="{{ route('category.wise.location',$category->category_id) }}" style="margin-left: 30px;"><b>
              {{$category['category']['name']}}</b></a>
            @endforeach
            
          </div>
        </div><hr><br>

      </div>
    </section>
  <!-- Location division -->



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
                    <a class="btn btn-success" href="{{ route('location.details.info',$allLocationData->slug) }}">See details</a>
                  </div>
              </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>
  <!-- Explore Bangladesh -->



@endsection
