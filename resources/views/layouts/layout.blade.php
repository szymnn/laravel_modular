<html>
{{--SWAL--}}
@include('sweetalert::alert')
{{--COMPONENTS--}}
@include('layouts.components.footer')
@include('layouts.components.head')
@include('layouts.components.header')
@include('layouts.components.navbar')

    <head>
       @stack('head')
    </head>

    <body class="g-sidenav-show  bg-gray-200">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

            <header>
                @yield('header')
            </header>
            @yield('navbar_mainsite')

            <section class="pt-3 pb-4">
                @yield('content')
            </section>

            <footer class="footer py-4  ">
                @yield('footer')
            </footer>
        </main>
    </body>
</html>
