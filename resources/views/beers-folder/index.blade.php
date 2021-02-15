@extends('layouts.main')

@section('main')
  <h1>DB Beers</h1>

  @if (session('message'))
    <div class="alert {{session('class')}}">
      {{session('message')}}
    </div>
      
  @endif

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
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody >
      @foreach ($beers as $beer)
      <tr>
        <td>{{ $beer->id }}</td>
        <td> <strong>{{ $beer->nome_birra }}</strong> </td>
        <td>{{ $beer->marca }}</td>
        <td>{{ $beer->prezzo }} <strong>&#8364;</strong></td>
        <td>{{ $beer->gradazione_alcolica }} <strong> %</strong> </td>
        <td>{{ $beer->created_at }}</td>
        <td>{{ $beer->updated_at }}</td>
        <td>
          <!-- <a class="btn btn-outline-dark" href="{//{ route('beers.show', ['beer' => $beer->id])}}">Vai A</a> -->
          <a class="btn btn-outline-dark" href="{{ route('beers.show', $beer->id)}}"> <i class="fas fa-search-plus"></i></a>
        </td>
        <td>
          <a class="btn btn-outline-dark" href="{{ route('beers.edit', $beer->id)}}"><i class="fas fa-pencil-alt"></i></a>
        </td>
        <td>
          <form action="{{route('beers.destroy', $beer->id)}}" method="post" onsubmit="return confirm('Procedere alla cancellazione?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></button>
          </form>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{route('beers.create')}}" class="btn btn-secondary">Aggiungi Prodotto</a>
@endsection
