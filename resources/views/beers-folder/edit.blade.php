@extends('layouts.main')

@section('main')
  <h1>Modifica Prodotto</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endForeach
      </ul>
    </div>
  @endif
  <form action="{{route('beers.update', $beer )}}" method="post">
    @csrf
    
    @method('PUT')
    <div class="form-group">
      <label for="nome_birra">Nome Prodotto</label>
      <input type="text" class="form-control" id="nome_birra"  placeholder="Nome del prodotto" name="nome_birra" value="{{$beer->nome_birra}}">
      <small lass="form-text text-muted">Il nome comprensivo di spazi può comprendere un massimo di 30 caratteri</small>
    </div>
    <div class="form-group">
      <label for="marca">Marca</label>
      <input type="text" class="form-control" id="marca"  placeholder="Marca" name="marca" value="{{$beer->marca}}">
      <small lass="form-text text-muted">Il nome comprensivo di spazi può comprendere un massimo di 20 caratteri</small>
    </div>
    <div class="form-group">
      <label for="prezzo">Prezzo</label>
      <input type="text" class="form-control" id="prezzo"  placeholder="Prezzo" name="prezzo" value="{{$beer->prezzo}} ">
    </div>
    <div class="form-group">
      <label for="gradazione_alcolica">Gradazione alcolica</label>
      <input type="text" class="form-control" id="gradazione_alcolica"  placeholder="Gradazione alcolica" name="gradazione_alcolica" value="{{$beer->gradazione_alcolica}}">
      <small lass="form-text text-muted">Inserire SOLO un dato numerico</small>
    </div>
    <button type="submit" class="btn btn-primary">Modifica prodotto</button>
    <a href="{{ route('beers.index')}}"  class="btn btn-outline-dark">Torna alla lista</a>
  </form>
@endsection
