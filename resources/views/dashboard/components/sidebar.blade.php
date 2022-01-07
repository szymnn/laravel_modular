 <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark ps bg-white position-absolute" id="sidenav-main">
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto max-height-vh-100 ps ps--active-x" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('index.page')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">home</i>
                    </div>
                    <span class="nav-link-text ms-1">Strona główna</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('dashboard.page')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Panel</span>
                </a>
            </li>
            @can('categories create')
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('categories.create')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Stwórz Kategorie</span>
                </a>
            </li>
            @endcan
            @can('post create')
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('posts.create')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Stwórz Post</span>
                </a>
            </li>
            @endcan
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Konto</h6>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white " href="../pages/profile.html">--}}
{{--                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--                        <i class="material-icons opacity-10">person</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Profile</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('logout')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">logout</i>
                    </div>
                    <span class="nav-link-text ms-1">Wyloguj się</span>
                </a>
            </li>

        </ul>
        </div>
     </div>
 </aside>
