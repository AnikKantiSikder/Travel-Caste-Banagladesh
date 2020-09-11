  <!-- Header Section -->
  <section class="header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-light">

        <a href="" class="navbar-brand"><h3 style="color: white;"><i>TravelCasteBangladesh</i></h3></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav popular">
            <a href="{{ url(' ') }}" class="nav-item nav-link active">Home</a>

            <div class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Find best places</a>
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
            
            <a href="{{ route('profiles.view') }}" class="nav-item nav-link">Profile</a>
            <a href="{{ route('tour.events') }}" class="nav-item nav-link">Tour events</a>
            <a href="" class="nav-item nav-link">Login</a>
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