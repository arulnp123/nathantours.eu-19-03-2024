<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>NATHAN Travels & Tours</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	 <style>
	.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
	
	
      figure {
  border: 1px #cccccc solid;
  padding: 4px;
  margin: auto;
}

figcaption {
  background-color: rgb(255, 255, 255);
  color: white;
  font-style: inherit;
  padding: 2px;
  text-align: center;
}
    </style>

  </head>
  <body>
@yield('third_party_stylesheets')
@stack('page_css')
</head>

    <div class="page">

@include('frontend/layouts.header')


@yield('content')

@include('frontend/layouts.footer')
 <div class="snackbars" id="form-output-global"></div>

@yield('third_party_scripts')
    <script src="{!! asset('assets/js/core.min.js') !!}"></script>
    <script src="{!! asset('assets/js/script.js') !!}"></script>
</body>
</html>
 
 