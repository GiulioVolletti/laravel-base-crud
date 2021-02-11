@extends('layouts.main')

@section('main')
<h1>Nuovo Prodotto</h1>
<form action="{{route('beers.store')}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
    <label for="nome_birra">Nome Prodotto</label>
    <input type="text" class="form-control" id="nome_birra"  placeholder="Nome del prodotto" name="nome_birra">
    <small lass="form-text text-muted">Il nome comprensivo di spazi può comprendere un massimo di 30 caratteri</small>
  </div>
  <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" id="marca"  placeholder="Marca" name="marca">
    <small lass="form-text text-muted">Il nome comprensivo di spazi può comprendere un massimo di 20 caratteri</small>
  </div>
  <div class="form-group">
    <label for="prezzo">Prezzo</label>
    <input type="text" class="form-control" id="prezzo"  placeholder="Prezzo" name="prezzo">
  </div>
  <div class="form-group">
    <label for="gradazione_alcolica">Gradazione alcolica</label>
    <input type="text" class="form-control" id="gradazione_alcolica"  placeholder="gradazione alcolica" name="Gradazione_alcolica">
    <small lass="form-text text-muted">Inserire SOLO un dato numerico</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
