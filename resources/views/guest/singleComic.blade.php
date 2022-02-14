@extends('guest.layout.base')

@section('documentTitle')
  {{$pageName}}
@endsection

@section('content')
{{-- @dd($product) --}}
  <div class="comic-container">
    <div class="supp-comic-container">
        <div>
          <h2>{{ $product['title'] }}</h2>
        </div>
        <div>
          <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
        </div>
        <div>
          {{-- per stampare html --}}
          {!! $product['description'] !!}
          {{-- {{ $product['descrizione'] }} --}}
        </div>
      </div>
  </div>
@endsection