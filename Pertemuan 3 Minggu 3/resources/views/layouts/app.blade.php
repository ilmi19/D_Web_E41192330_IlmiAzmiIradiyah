<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta chanset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <meta http-equiv="X-ua-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        @yield('content')
        </div>
    </div>
</body>
</html>