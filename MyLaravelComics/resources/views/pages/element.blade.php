    @extends('layouts.main-layout')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $elem['title'] }}</h2>
                    <p>{{ $elem['description'] }}</p>
                </div>
            </div>
        </div>
    @endsection
