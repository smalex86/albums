<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    @yield('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    @yield('scripts')
  </head>
  <body>
    @include('blocks.mainMenu')
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
