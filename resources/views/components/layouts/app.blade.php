<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Diskominfo Kota Kendari</title>
  <meta name="description" content="Website Diskominfo Kota Kendari">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/icofont@1.0.1-alpha.1/icofont.min.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-poppins">

  <x-navbar.navbar />
  {{ $slot }}
  <x-footer />

  @stack('script')
</body>

</html>
