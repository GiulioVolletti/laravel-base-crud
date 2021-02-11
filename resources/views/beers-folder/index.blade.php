@extends('layouts.main')

@section('main')
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
  <a href="{{route('beers.create')}}" class="btn btn-secondary">Aggiungi Prodotto</a>
@endsection
