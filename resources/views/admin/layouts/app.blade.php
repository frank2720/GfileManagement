<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @vite(['resources/js/dashboard.js'])
</head>
<body>
    @include('admin.navbar')
    @yield('content')
    @include('admin.scripts')
</body>
</html>
