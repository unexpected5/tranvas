<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tranvas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        @yield('header-styles')
    </head>
    <body>
      <div class="container">
          <div class="content-container" >
              @yield('content')
          </div>
      </div>
@yield('footer-script')

    </body>
</html>
