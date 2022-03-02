<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- index14:58-->

<head>
  <!-- Basic need -->
  <title>{{ config('app.name') }}</title>
  <meta charset="UTF-8">
  {{$seo}}
  <meta name="author" content="">
  <link rel="profile" href="#">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Css Styles -->
  {{$css}}
</head>

<body>
  <!--preloading-->
  {{--<x-partial.preloader></x-partial.preloader>--}}

  <x-header.header></x-header.header>
  <!-- END | Header -->
  {{ $slot }}

  <!-- footer section-->
  <x-footer.footer></x-footer.footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="{{mix('front/js/app.js')}}"></script>
</body>
</html>