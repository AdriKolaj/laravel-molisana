@extends('layouts.main')

@section('content')

    <main>
        <section class="container">
            <h2>LE LUNGHE</h2>
            <div class="cards">
                @foreach ($lunghe as $lunga)
                <div class="card">
                    <img src="{{ $lunga['src'] }}" alt="{{ $lunga['titolo'] }}">
                    <div class="card-text">
                        <a href="{{ route('prodotto', ['id' => $lunga["id"]]) }}">{{ $lunga['titolo'] }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section class="container">
            <h2>LE CORTE</h2>
            <div class="cards">
                @foreach ($corte as $corta)
                <div class="card">
                    <img src="{{ $corta['src'] }}" alt="{{ $corta['titolo'] }}">
                    <div class="card-text">
                        <a href="{{ route('prodotto', ['id' => $corta["id"]]) }}">{{ $corta['titolo'] }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section class="container">
            <h2>LE CORTISSIME</h2>
            <div class="cards">
                @foreach ($cortissime as $cortissima)
                <div class="card">
                    <img src="{{ $cortissima['src'] }}" alt="{{ $cortissima['titolo'] }}">
                    <div class="card-text">
                        <a href="{{ route('prodotto', ['id' => $cortissima["id"]]) }}">{{ $cortissima['titolo'] }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
