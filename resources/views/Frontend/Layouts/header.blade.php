
  <!-- Header Section -->
  <section class="header">
    <div class="container-fluid" style="background-color: #137257;">
      <nav class="navbar navbar-expand-md navbar-light ">

        <a href="{{ url('') }}" class="navbar-brand">
          <img src="{{url('public/Upload/Logo_images/'.$logo->image)}}" style="height: 65px;">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav popular">
            <a href="{{ url(' ') }}" class="nav-item nav-link active" style="color: #ece519;">Home</a>

            <div class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #DAEBE8;">Find best places</a>
              <div class="dropdown-menu" style="background: #BADDFB;">
                <a href="{{ route('find.best.places') }}" class="dropdown-item">Dhaka</a>
                <a href="" class="dropdown-item">Sylhet</a>
                <a href="" class="dropdown-item">Khulna</a>
                <a href="" class="dropdown-item">Barishal</a>
                <a href="" class="dropdown-item">Rangpur</a>
                <a href="" class="dropdown-item">Rajshahi</a>
                <a href="" class="dropdown-item">Chittagong</a>
                <a href="" class="dropdown-item">Mymensingh</a>
              </div>
            </div>
            
            <a href="{{ route('customerprofiles.view') }}" class="nav-item nav-link" style="color: #DAEBE8;">Profile</a>
            <a href="{{ route('tour.events') }}" class="nav-item nav-link" style="color: #DAEBE8;">Tour events</a>
            <a href="{{ route('customer.login') }}" class="nav-item nav-link" style="color: #DAEBE8;">Login</a>
          </div>
          <div class="navbar-nav">
            <form class="form-inline">
              <div class="input-group">
                <input type="text" name="search" placeholder="Search">
                <div class="input-group-append">
                  <button type="button" class="btn btn-secondary">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </section>