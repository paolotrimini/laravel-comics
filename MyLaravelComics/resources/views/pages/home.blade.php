    @extends('layouts.main-layout')


    @section('content')
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
                                    <a href="{{ route('elem', $loop->index)}}">
                                        <p>{{$comics['series']}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection


