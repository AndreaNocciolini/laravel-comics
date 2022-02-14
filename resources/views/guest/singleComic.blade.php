@extends('guest.layout.base')

@section('documentTitle')
    {{ $pageName }}
@endsection

@section('content')
    {{-- @dd($product) --}}
    <div class="comic-container">
        <div class="supp-comic-container">
            <div>
                <h2>{{ $product['title'] }}</h2>
            </div>
            <div class="comic-price-container row">
                <div class="col-10 d-flex justify-content-between align-items-center">
                    <h4>
                        U.S. Price: {{ $product['price'] }}
                    </h4>
                    <h4>
                        AVAILABLE
                    </h4>
                </div>
                <div class="col-2 d-flex justify-content-around align-items-center">
                    Check Availability
                </div>
            </div>
            <div>
                {!! $product['description'] !!}
            </div>
        </div>
        <div class="adv">
            <h5>Advertisement</h5>
            <img src="{{asset('images/adv.jpg')}}" alt="">
        </div>
    </div>
        <div class="comic-container comic-info-container">
            <div class="supp-comic-container row row-cols-2 p-5">
                <div class="talent col p-4">
                    <h4>TALENT</h4>
                    <div class="artists">
                        Artists:
                        @foreach ($product['artists'] as $item)
                            @if ($loop->last)
                                <span><a href="">{{ $item }}</a></span>

                            @else
                                <span><a href="">{{ $item }}</a></span>,
                            @endif
                        @endforeach
                    </div>
                    <div class="writers">
                        Writers:
                        @foreach ($product['writers'] as $item)
                            @if ($loop->last)
                                <span><a href="">{{ $item }}</a></span>

                            @else
                                <span><a href="">{{ $item }}</a></span>,
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="specs col p-4">
                    <h4>SPECS</h4>
                    <div class="series">
                        Series: <a href="">{{ $product['series'] }}</a>
                    </div>
                    <div class="price">
                        U.S. Price: {{ $product['price'] }}
                    </div>
                    <div class="on-sale-date">
                        On Sale Date: {{ date_format(date_create($product['sale_date']), 'M d y') }}
                    </div>
                </div>
            </div>
        </div>
    
@endsection
