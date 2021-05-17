<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="" type=""/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DC - comics</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    {{-- header--}}
    @include('components.header')
    @yield('content')


    <img src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt="">

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


    {{--footer --}}
    @include('components.footer')








</body>
</html>
