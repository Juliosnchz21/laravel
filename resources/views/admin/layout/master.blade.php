<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    
    @vite(['resources/sass/app.scss'])
</head>

<body>
    @include('admin.layout.partials.header')
    <main>
        @yield('content')
    </main>
</body>
</html>