    @extends('layouts.main-layout')


    @section('content')
        <div class="box-jumbo">
            <img src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt="">
        </div>
        <div id="card">
            <div class="container">
                <div class="main-box">
                    @foreach($data as $comics)
                        <div class="col-lg-2">
                            <div class="box-card">
                                <div class="box-image">
                                    <img src="{{$comics['thumb']}}" alt="">
                                </div>
                                <div class="box-text">
                                    <p>{{$comics['series']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection


