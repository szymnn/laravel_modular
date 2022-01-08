<html>
{{--DASHBOARD COMPONENTS--}}
@include('dashboard.components.sidebar')
{{--MAIN COMPONENTS--}}
@include('layouts.components.footer')
@include('layouts.components.navbar')
@include('layouts.components.head')


    <head>
        @stack('head')
    </head>
    <body class="g-sidenav-show  bg-gray-200">
    {{--SWAL--}}
    @include('sweetalert::alert')
    @yield('sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


            @yield('navbar_dashboard')
            <div class="container-fluid py-4">
                @yield('dashboard')
            </div>

            <footer class="footer ">
                <div class="container">
                    <div class="row">
                        @yield('footer')
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>
