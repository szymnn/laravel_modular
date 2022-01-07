<head>
    @include('layouts.components.head')
</head>

<body class="g-sidenav-show  bg-gray-200">
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <header>
        @include('layouts.components.header')
    </header>

    <section class="pt-3 pb-4">
        @yield('content')
    </section>

    <footer class="footer py-4  ">
        @include('layouts.components.footer')
    </footer>
</main>
</body>
