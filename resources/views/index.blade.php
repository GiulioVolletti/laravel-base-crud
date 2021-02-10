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

        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Nome Birra</th>
              <th>Marca</th>
              <th>Prezzo</th>
              <th>Gradazione alcolica</th>
              <th>Creazione</th>
              <th>Data Aggiornamento</th>
              <th></th>
            </tr>
          </thead>
          <tbody >
            @foreach ($beers as $beer)
              <tr>
                <td>{{ $beer->id }}</td>
                <td>{{ $beer->nome_birra }}</td>
                <td>{{ $beer->marca }}</td>
                <td>{{ $beer->prezzo }}</td>
                <td>{{ $beer->gradazione_alcolica }}</td>
                <td>{{ $beer->created_at }}</td>
                <td>{{ $beer->updated_at }}</td>
                <td>
                  <!-- <a class="btn btn-outline-dark" href="{{ route('beers.show', ['beer' => $beer->id])}}">Vai A</a> -->
                  <a class="btn btn-outline-dark" href="{{ route('beers.show', $beer->id)}}">Vai A</a>
                </td>

              </tr>
            @endforeach
          </tbody>
        </table>

      </div>


    </body>
</html>
