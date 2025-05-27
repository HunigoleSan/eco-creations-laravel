<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Jerarquias CSS -->
    <link rel="stylesheet" href="{{ asset('css/var.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
    <title>@yield('title')</title>
    @livewireStyles
</head>
<body>
    <main>
        @yield('content')
    </main>

    @livewireScripts
</body>
</html>