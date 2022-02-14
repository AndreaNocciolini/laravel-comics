@extends('guest.layout.base')

@section('documentTitle')
    Home
@endsection

@section('content')
    <main class="bg-dark text-white width-100">
        <div class="row my-home-container">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="comic-img" style="background-image: url({{ $comic['thumb'] }});"></div>
                    <h6>
                        <a class="link-home" href="{{ route('product', $comic['id']) }}">{{ $comic['title'] }}</a>
                    </h6>
                </div>
            @endforeach
        </div>
    </main>
@endsection
