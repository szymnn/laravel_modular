<head>
    @include('layouts.components.head')
</head>

<body class="g-sidenav-show  bg-gray-200">

        @include('dashboard.components.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
            <section class="pt-3 pb-4">
                @yield('dashboard')
            </section>
        </main>
        <footer class="footer ">
            <div class="container">
                <div class="row">
                    @include('layouts.components.footer')
                </div>
            </div>
        </footer>
    </main>

</body>
