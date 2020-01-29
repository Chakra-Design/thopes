<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thopes</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<div class="flex-center position-ref full-height">
    @yield('content')
</div>
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
