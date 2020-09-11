<!DOCTYPE html>
<html>
<head>
  <title>Travel Caste Bangladesh</title>
  <link rel="stylesheet" href="{{asset('public/Frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/css/customize.css')}}">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

@include('Frontend.Layouts.header')

@yield('content')

@include('Frontend.Layouts.footer')



  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="gotoup">
          <img src="{{asset('public/Frontend/image/scrl.jpg')}}" style="width: 40px; height: 40px;">
        </div>
      </div>
    </div>
  </div>


  <!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(window).scroll(function(){
        if($(this).scrollTop()>300){
          $('.gotoup').fadeIn();
        }else{
          $('.gotoup').fadeOut();
        }
      });
      $('.gotoup').click(function(){
        $('html,body').animate({scrollTop:0},1000);
      });
    });
  </script>
  <script src="{{asset('public/Frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('public/Frontend/js/bootstrap.min.js')}}"></script>




</body>



<script type="text/javascript">
  $(document).ready(function(){

    $('#image').change(function(e){
      var reader= new FileReader();
      reader.onload= function(e){
        $('#show_image').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

  });
</script>






</html>