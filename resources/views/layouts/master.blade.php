<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.7.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.7.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>@yield('title') - {{env('APP_NAME')}}</title>
  <link rel="stylesheet" href="{{asset('assets/mobirise')}}/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('assets/mobirise')}}/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="{{asset('assets/mobirise')}}/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="{{asset('assets/mobirise')}}/assets/parallax/jarallax.css">
  <link rel="stylesheet" href="{{asset('assets/mobirise')}}/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="{{asset('assets/mobirise')}}/assets/socicon/css/styles.css">
  <link rel="stylesheet" href="{{asset('assets/mobirise')}}/assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="{{asset('assets/mobirise')}}/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="{{asset('assets/mobirise')}}/assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 cid-ts3X6bNTYw" once="menu" id="menu1-0">
    

    @include('layouts.navbar')
</section>

<section data-bs-version="5.1" class="header1 cid-ts3XlBhsdA mbr-fullscreen mbr-parallax-background" id="header1-1">

    

    
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Rania</strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7">
                    PT. MENARA DUNIA TOUR TRAVEL</p>
                <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="{{url('/')}}#form7-d">Booking Sekarang</a></div>
            </div>
        </div>
    </div>
</section>

@yield('content')


<section data-bs-version="5.1" class="footer3 cid-ts3YjnsxqG" once="footers" id="footer3-3">
@include('layouts.footer')
</section>
<script src="{{asset('assets/mobirise')}}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="{{asset('assets/mobirise')}}/assets/parallax/jarallax.js"></script>  
<script src="{{asset('assets/mobirise')}}/assets/smoothscroll/smooth-scroll.js"></script>  
<script src="{{asset('assets/mobirise')}}/assets/ytplayer/index.js"></script>  
<script src="{{asset('assets/mobirise')}}/assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="{{asset('assets/mobirise')}}/assets/theme/js/script.js"></script>  
<script src="{{asset('assets/mobirise')}}/assets/formoid/formoid.min.js"></script>  
  
  
</body>
</html>