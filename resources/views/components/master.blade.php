<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token"
        content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"
          defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch"
        href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet">

  <!-- Styles -->
  <!-- jQuery UI -->
  <link rel="stylesheet"
        href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">
  <link rel="stylesheet"
        href="{{ asset('vendor/jquery-ui/jquery-ui.theme.min.css') }}">
  <link href="{{ asset('css/main.css') }}"
        rel="stylesheet">
  <link href="{{ asset('css/all.css') }}"
        rel="stylesheet">
  @toastr_css
  <link href="{{ asset('css/custom.css') }}"
        rel="stylesheet">
  @stack('css')
  @yield('header-end')
</head>
<body class="@yield('body-class')">
{{ $slot }}

@yield('body-end')

@jquery
<script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>
@toastr_js
@toastr_render
@stack('js')
</body>
</html>
