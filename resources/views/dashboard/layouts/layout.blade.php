<head>
    @include('layouts.components.head')
</head>

<body class="g-sidenav-show  bg-gray-200">

            @include('dashboard.components.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
        <div class="container-fluid py-4">
            @yield('dashboard')
        </div>
    </main>

    <footer class="footer ">
        @include('layouts.components.footer')
    </footer>

</body>
