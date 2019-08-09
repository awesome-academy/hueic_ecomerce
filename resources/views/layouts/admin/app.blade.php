<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <title>Hueic admin</title>
    <meta name="description" content="Project 1 - hueic framgia">
    <meta name="tags" content="Hueic, framgia">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    @yield('css')
    <meta property="og:url" content="{{ request()->url() }}"/>

</head>
<body >
    @include('includes.admin.navbars.navbar')
    <div class="container-fluid">
        <div class="row">
            @include('includes.admin.navbars.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>
</html>
