<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Usuario</title>
    
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])

</head>

<body>
    @include('admin.components.modal-destroy')
    @include('admin.layout.partials.header')
    <main>
        @yield('content')
    </main>
</body>
</html>