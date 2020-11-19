@extends('Frontend.Layouts.master')



@section('content')


<section class="bg-light page-section ok" id="exploreCard" style="margin-top: 50px;">
    <div class="container">
      <!-- Explore home page header starts-->
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><b>Explore Dhaka</b></h2>
          <h3 class="section-subheading text-muted">All the travelling locations from the Dhaka</h3>
        </div>
      </div><br><br>
      <!-- Explore home page header ends-->

      <!-- Card starts-->
      <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('public/Frontend/image/cardone.jpg') }}"  alt="Card image cap" style="height: 200px;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <a class="btn btn-success" href="#">See details</a>
                </div>
            </div>
      </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('public/Frontend/image/cardtwo.jpg') }}"  alt="Card image cap" style="height: 200px;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <a class="btn btn-success" href="#">See details</a>
                </div>
            </div>
      </div>
       <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('public/Frontend/image/cardfour.jpg') }}"  alt="Card image cap" style="height: 200px;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <a class="btn btn-success" href="#">See details</a>
                </div>
            </div>
      </div>
      
      <!-- Card ends-->

      </div>
  </section><br><br><br><br><br><br>


@endsection
