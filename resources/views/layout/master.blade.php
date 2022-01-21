<!DOCTYPE html>
<html lang="pl">
<head>
    <title>System bankowy</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('central-office') }}">Centrala</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('departments') }}">Oddziały</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clients') }}">Klienci</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@if(session('success') || session('error'))
    <div class="col-md-10 mt-3 mx-auto">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
    </div>
@endif
<div class="container mt-5">
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
