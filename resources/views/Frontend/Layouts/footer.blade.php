  <style type="text/css">

  </style>

  <!-- Footer Part -->
  <section class="footer_part">
    <div class="container">

      <div class="row">

        <div class="col-md-4 footer">
          <h4 style="color: white">Contact Us</h4>
          <p style="color: white">Address: {{$contact->address}}<br> Mobile: {{$contact->mobile}}<br>
            Email: {{$contact->email}}</p><br>
          <a class="btn btn-success" href="{{ route('contact.us') }}">Click here</a>
        </div>

        <div class="col-md-4 footer">
          <h4 style="color: white">About Us</h4><br>
          <a class="btn btn-success" href="{{ route('about.us') }}">Click here</a>
        </div>

        <div class="col-md-4">
          <h4 style="color: white">Follow Us</h4><br>
          <div class="social">
            <ul>
              <li><a href="{{$contact->facebook}}" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
              <li><a href="{{$contact->twitter}}" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
              <li><a href="{{$contact->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
              <li><a href="{{$contact->google_plus}}" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p style="color: white;padding: 50px 0px 10px 0px;">
            Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> @Anik kanti sikder
          </p>
        </div>
      </div>
    </div>
  </section>