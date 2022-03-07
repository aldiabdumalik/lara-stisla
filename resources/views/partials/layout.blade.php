<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{ asset('templates/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('templates/modules/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('templates/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('templates/css/components.css')}}">
</head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            @include('partials.topbar')
            @include('partials.sidebar')

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title')</h1>
                        {{ Breadcrumbs::render() }}
                    </div>

                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>

            @include('partials.footer')
        </div>
    </div>
    <script src="{{ asset('templates/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('templates/modules/popper.js')}}"></script>
    <script src="{{ asset('templates/modules/tooltip.js')}}"></script>
    <script src="{{ asset('templates/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('templates/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('templates/modules/moment.min.js')}}"></script>
    <script src="{{ asset('templates/js/stisla.js')}}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    @stack('page-js')
    <!-- Template JS File -->
    <script src="{{ asset('templates/js/scripts.js')}}"></script>
    <script src="{{ asset('templates/js/custom.js')}}"></script>
</body>
</html>