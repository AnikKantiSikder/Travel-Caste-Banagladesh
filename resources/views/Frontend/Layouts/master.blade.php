<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Travel Caste Bangladesh</title>
  <link rel="stylesheet" href="{{asset('public/Frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/css/customize.css')}}">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  {{-- For product details --}}
  <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
  {{--  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> --}}
  {{--  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> --}}
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/fonts/linearicons-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/vendor/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/vendor/MagnificPopup/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/vendor/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/css/util.css">
  <link rel="stylesheet" type="text/css" href="{{asset('public/Frontend/ProductDetail')}}/css/main.css">
  {{-- For product details --}}

  <!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Notify js -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

  {{-- Sweat alert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  
  <style type="text/css">
    .notify-corner{
      z-index: 10000 !important;
    }
  </style>

 {{-- Font awesome icon --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

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


  <!--Live chat Start of Tawk.to Script-->
      <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5fc53ae4a1d54c18d8eeeffd/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
<!--End of Tawk.to Script-->

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

{{-- For product details --}}
  {{-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> --}}
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/animsition/js/animsition.min.js"></script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/bootstrap/js/popper.js"></script>
  {{-- <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/bootstrap/js/bootstrap.min.js"></script> --}}
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function(){
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    })
  </script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/daterangepicker/moment.min.js"></script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/slick/slick.min.js"></script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/js/slick-custom.js"></script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/parallax100/parallax100.js"></script>
  <script>
        $('.parallax100').parallax100();
  </script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
  <script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
      $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
              enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
  </script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/sweetalert/sweetalert.min.js"></script>
  <!-- jquery-validation -->
  <script src="{{asset('public/Backend')}}/plugins/jquery-validation/jquery.validate.min.js"></script>

  {{-- Sweat alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script>
    $('.js-addwish-b2').on('click', function(e){
      e.preventDefault();
    });

    $('.js-addwish-b2').each(function(){
      var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-b2');
        $(this).off('click');
      });
    });

    $('.js-addwish-detail').each(function(){
      var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-detail');
        $(this).off('click');
      });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){
      var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to cart !", "success");
      });
    });
  
  </script>
  <script src="{{asset('public/Frontend/ProductDetail')}}/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <script>
    $('.js-pscroll').each(function(){
      $(this).css('position','relative');
      $(this).css('overflow','hidden');
      var ps = new PerfectScrollbar(this, {
        wheelSpeed: 1,
        scrollingThreshold: 1000,
        wheelPropagation: false,
      });

      $(window).on('resize', function(){
        ps.update();
      })
    });
  </script>

  <script src="{{asset('public/Frontend/ProductDetail')}}/js/main.js"></script>

  {{-- Sweat aleart for delete --}}
<script type="text/javascript">
  $(function(){
    $(document).on('click', '#delete', function(e){
      
      e.preventDefault();
      var link= $(this).attr("href");
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            window.location.href= link;
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
    });
  });
</script>
{{-- Sweat aleart for delete --}}

{{-- Notify js message --}}
    @if(session()->has('success'))
      <script type="text/javascript">
        $(function(){
          $.notify("{{session()->get('success')}}", {globalPosition:'top right', className:'success'});
        });
      </script>
    @endif

    @if(session()->has('error'))
      <script type="text/javascript">
        $(function(){
          $.notify("{{session()->get('error')}}", {globalPosition:'top right', className:'error'});
        });
      </script>
   @endif



</html>