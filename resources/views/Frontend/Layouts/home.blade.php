


@extends('Frontend.Layouts.master')
  @section('content')
    @include('Frontend.Layouts.slider')

    <style type="text/css">
      .notice .container{
        height: auto;
        padding: 20px;
        margin-bottom: 50px;
        background-color: #7DC242;
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
    </style>
    <br><br>

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

  <!-- Explore Bangladesh -->
  <section class="mission_vision">
    <div class="container">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><b>Explore Bangladesh</b></h2>
            <h3 class="section-subheading text-muted">welcome to heaven</h3>
          </div><br><br>


       <div class="row">
        <div class="col-md-4">
          <h3 style="padding-top: 15px;padding-bottom: 5px;">
            <b>Sea beach</b>
          </h3>
        </div>
      </div>

      <div class="row">

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('public/Frontend/image/cardone.jpg') }}"  alt="Card image cap"style="height: 200px;">
                <div class="card-body">
                  <h5 class="card-title">Cox'x bazar</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <a class="btn btn-success" href="{{ route('see.post.details') }}">See details</a>
                </div>
            </div>
      </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('public/Frontend/image/cardtwo.jpg') }}"  alt="Card image cap" style="height: 200px;">
                <div class="card-body">
                  <h5 class="card-title">Rangamati</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <a class="btn btn-success" href="#">See details</a>
                </div>
            </div>
      </div>
       <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('public/Frontend/image/cardthree.jpg') }}"  alt="Card image cap" style="height: 200px;">
                <div class="card-body">
                  <h5 class="card-title">Barisal</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <a class="btn btn-success" href="#">See details</a>
                </div>
            </div>
      </div>

      </div> <br><br>
{{-- Hill track --}}
       <div class="row">
        <div class="col-md-4">
          <h3 style="padding-top: 15px;padding-bottom: 5px;">
            <b>Hill tract</b>
          </h3>
        </div>
      </div>

      <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('public/Frontend/image/cardone.jpg') }}"  alt="Card image cap"style="height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title">Cox'x bazar</h5>
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
                      <h5 class="card-title">Rangamati</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-success" href="#">See details</a>
                    </div>
                </div>
          </div>
           <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('public/Frontend/image/cardthree.jpg') }}"  alt="Card image cap" style="height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title">Barisal</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-success" href="#">See details</a>
                    </div>
                </div>
          </div>

        </div>


      <!--Container ends here-->
    </div><br><br><br><br>

  </section>

<!-- Tourevents -->
    <section class="page-section" id="tourevents">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> <b>Tour events</b> </h2>
            <h3 class="section-subheading text-muted">See and join on the running tour events</h3>
          </div>
        </div>

     <div class="jumbotron text-center ">
        <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="card" style="background-color: #f1c40f;">
                  <div class="card-body">
                    <h5 class="card-title">Dhaka to Cox'x bazar</h5>
                    <p class="card-text">3 days and 4 nights</p>
                    <p class="card-text">Date: 11/9/2020 to 14/9/2020</p>
                    <a href="{{ route('tour.event.details') }}" class="btn btn-success">See details</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card" style="background-color: #f1c40f;">
                  <div class="card-body">
                    <h5 class="card-title">Rajshahi to Bandarban</h5>
                    <p class="card-text">2 days and 3 nights</p>
                    <p class="card-text">Date: 15/9/2020 to 17/9/2020</p>
                    <a href="#" class="btn btn-success">See details</a>
                  </div>
                </div>
              </div>
            </div>
            <br><br>
            
            <a href="{{ route('tour.events') }}" class="btn btn-lg btn-secondary">See more>></a>

        </div>
      </div>

      </div>
    </section>


  @endsection


