@extends('layouts.main')

@section('main')

  <h1>Prodotto Birra</h1>

  <table class="table table-striped">
    @foreach ($beer->getAttributes() as $key => $value)
      <tr>
        <td> <strong>{{$key}}</strong> </td>
        <td> {{$value}}</td>
      </tr>
    @endforeach
  </table>
  <div class="text-right">
    <a href="{{ route('beers-folder.index')}}"  class="btn btn-outline-dark">Torna alla lista</a>

  </div>

@endsection
