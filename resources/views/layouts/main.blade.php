<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    @yield('content')


    @include('components.svg')
</body>
</html>