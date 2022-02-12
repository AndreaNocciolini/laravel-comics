@extends('guest.layout.base')

@section('documentTitle')
    Home
@endsection

@section('content')
    <main class="row">
        @foreach ($comics as $comic)
            <div class="col-2">
                <div style="background-image: url({{$comic['thumb']}}); background-repeat:no-repeat; background-size:cover; width: 13em; height: 13em; background-position-x: center;"></div>
                <h4>
                    {{ $comic['title'] }}
                </h4>
            </div>
        @endforeach
    </main>
@endsection
