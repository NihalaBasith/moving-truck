<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="">

  <title> Carint </title>



  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/responsive.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css.map') }}">

        

        @vite(['resources/js/app.js'])
</head>


        



    <body>
    <div id="app"></div>
</body>
<script src="{{ asset('asset/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.js') }}"></script>
<script src="{{ asset('asset/js/custom.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
</html>


