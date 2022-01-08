<html>
{{--SWAL--}}
@include('sweetalert::alert')
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
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            @yield('sidebar')

            @yield('navbar_dashboard')
            <section class="pt-3 pb-4">
                @yield('dashboard')
            </section>

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
