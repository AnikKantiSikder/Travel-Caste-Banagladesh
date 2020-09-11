


@extends('Frontend.Layouts.master')
  @section('content')
    @include('Frontend.Layouts.slider')

    <br><br>

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



  <!-- Services -->
  <section class="our_services">
    <div class="container" style="padding-top: 15px">
      <!-- Nav tab -->
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a href="#service" class="nav-link active" data-toggle="tab">Our Services</a>
        </li>
        <li class="nav-item">
          <a href="#expertise" class="nav-link" data-toggle="tab">Our Expertise</a>
        </li>
        <li class="nav-item">
          <a href="#prouduct" class="nav-link" data-toggle="tab">Our Products</a>
        </li>
      </ul>
      <!-- Tab Content -->
      <div class="tab-content">
        <div id="service" class="container tab-pane active">
          <h3>Our Services</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        </div>
        <div id="expertise" class="container tab-pane fade">
          <h3>Our Expertise</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        </div>
        <div id="prouduct" class="container tab-pane fade">
          <h3>Our Product</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        </div>
      </div>
    </div>
  </section>

  @endsection


