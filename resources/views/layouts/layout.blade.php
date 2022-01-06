<head>
    @include('layouts.components.head')
</head>

<body>
    <header>
        @include('layouts.components.header')
    </header>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>

    <footer class="footer py-4  ">
        @include('layouts.components.footer')
    </footer>

</body>
