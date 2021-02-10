<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Beers</title>

      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
      <div class="container">
        <h1>DB Beers</h1>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome Birra</th>
              <th>Marca</th>
              <th>Prezzo</th>
              <th>Gradazione alcolica</th>
              <th>Creazione</th>
              <th>Data Aggiornamento</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>

      </div>


    </body>
</html>
