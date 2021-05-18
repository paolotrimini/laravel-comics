    @extends('layouts.main-layout')
    @section('content')
        <div class="single-page">
            {{-- COMIC --}}
            <div class="box-blue">
            </div>
            <div class="container">
                <div class="box-comic">
                    {{-- INFO --}}
                    <div class="box-info-1">
                        <div class="box-title">
                            <h1>{{ $elem['title'] }}</h1>
                        </div>
                        {{-- HEADER BOX COMIC --}}
                        <div class="box-green">
                            <div class="box-price">
                                <p>U.S. Price: {{ $elem['price'] }}</p>
                                <p>Available</p>
                            </div>
                            <div class="box-check">
                                <p>Check Availability <i class="fas fa-sort-down"></i></p>
                            </div>
                        </div>
                        <div class="box-description">
                            <p>{{ $elem['description'] }}</p>
                        </div>
                    </div>
                    {{-- ADV --}}
                    <div class="box-adv">
                        <p>Advertisement</p>
                        <div class="box-img">
                            <img src="{{ asset('/storage/assets/adv.jpg') }}" alt="adv">
                        </div>
                    </div>
                </div>
            </div>
            {{-- INFO--}}
            <div class="box-info-2">
                <div class="container">
                    <div class="box-talent">
                        <p>talent</p>
                    </div>
                    <div class="box-specs">
                        <p>specs</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
