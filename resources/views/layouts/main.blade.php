<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Beers</title>

      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
      <header>
        @yield('header')
      </header>

      <main>
        <div class="container">

          @yield('main')


        </div>
      </main>

      <footer>
        @yield('footer')
      </footer>

    </body>
</html>
