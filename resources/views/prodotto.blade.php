@extends('layouts.main')

@section('content')

  <div class="wrapper">
    <div class="container">
      <h1>{{ $prodotto["titolo"] }}</h1>
      <img src="{{ $prodotto["src-h"] }}" alt="{{ $prodotto["titolo"] }}">
      <img src="{{ $prodotto["src-p"] }}" alt="{{ $prodotto["titolo"] }}">
      <p>{!! $prodotto["descrizione"] !!}</p>
    </div>
  </div>

@endsection