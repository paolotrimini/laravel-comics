<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <title>DC - comics</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    @include('components.header')
    @yield('content')


    <img src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt="">

    <ul>
        @foreach($data as $comics)
            <li> {{$comics ['title']}}</li>
        @endforeach
    </ul>


    @include('components.footer')








</body>
</html>
