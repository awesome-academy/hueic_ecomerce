<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <title>Hueic ecomerce</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Project 1 - hueic framgia">
    <meta name="tags" content="Hueic, framgia">
    <meta name="author" content="hueic">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('css')
    <meta property="og:url" content="{{ request()->url() }}"/>
    @yield('og')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
</head>
<body >
    <header id="header-section">
        <div id="nav-top" class="hidden-xs">
            <div class="container">
                <div class="row">
                    @include('includes.front.navbars.navtop')
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                    @include('includes.front.navbars.navbar')
            </div>
        </div>
    </header>

    <main role="main" class="container">
        @yield('content')
    </main>
    @include('includes.front.footer')
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>
</html>
