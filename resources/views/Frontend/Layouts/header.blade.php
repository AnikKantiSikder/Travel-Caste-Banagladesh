
  <!-- Header Section -->
  <section class="header">
    <div class="container-fluid" style="background-color: #137257;">
      <nav class="navbar navbar-expand-md navbar-light ">
        {{-- Logo --}}
        <a href="{{ url('') }}" class="navbar-brand">
          <img src="{{url('public/Upload/Logo_images/'.$logo->image)}}" style="height: 65px;">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav popular">
            <a href="{{ url(' ') }}" class="nav-item nav-link active" style="color: #ece519;">Home</a>

        @if (@Auth::user()->id !=NULL && @Auth::user()->user_type == 'Customer')
          {{-- Find best place --}}
            <div class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #DAEBE8;">
                Find Best Places
              </a>
              <div class="dropdown-menu" style="background: #BADDFB;">

                @foreach ($divisions as $divisionData)
                  <a href="{{ route('division.wise.location',$divisionData->division_id ) }}" class="dropdown-item">
                    {{$divisionData['division']['name']}}</a>
                @endforeach
                
              </div>
            </div>
          {{-- Find best place --}}

          {{-- Profile --}}

            <a href="{{ route('customerprofiles.view')}}" class="nav-item nav-link" style="color: #DAEBE8;">Profile</a>
          {{-- Profile --}}

          {{-- Tour events --}}
            <a href="{{ route('tour.events') }}" class="nav-item nav-link" style="color: #DAEBE8;">Tour Events</a>
          {{-- Tour events --}}

          {{--Log in menu --}}
            
            <div class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #DAEBE8;">My Account</a>
              <div class="dropdown-menu" style="background: #BADDFB;">

                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="dropdown-item">Log out</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
                </form>
              </div>
            </div>
            {{-- Log in menu--}}
            @else
              <a href="{{ route('customer.login') }}" class="nav-item nav-link" style="color: #DAEBE8;">Login</a>
            @endif
          

          </div>
          {{-- Search --}}
          <div class="navbar-nav">
            <form class="form-inline">
              <div class="input-group">
                <input type="text" name="search" placeholder="Search" style="width: 25vh;">
                <div class="input-group-append">
                  <button type="button" class="btn btn-warning">Search</button>
                </div>
              </div>
            </form>
          </div>
          {{-- Search --}}
        </div>
      </nav>
    </div>
  </section>