<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="header">
        @include('layouts.header')
{{--        <image src="{{ asset('storage/1.png')  }}"></image>--}}
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @include('layouts.footer')
    </div>

</body>
</html>
