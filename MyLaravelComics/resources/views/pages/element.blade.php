    @extends('layouts.main-layout')
    @section('content')
        <div class="single-page">
            <div class="line-section">
            </div>
            <div class="container">
                <div class="box-comic">
                    <div class="box-title">
                        <h1>{{ $elem['title'] }}</h1>
                    </div>
                    <div class="box-info">
                        <p>U.S. Price: {{ $elem['price'] }}</p>
                    </div>
                    <div class="box-description">
                        <p>{{ $elem['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
