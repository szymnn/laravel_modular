<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="nav-item">
                            <a class="nav-link text-dark " href="{{route('index.page')}}">
                                <span class="nav-link-text ms-1">Strona główna</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark " href="{{route('dashboard.page')}}">
                                <span class="nav-link-text ms-1">Panel</span>
                            </a>
                        </li>
                        @can('categories create')
                            <li class="nav-item">
                                <a class="nav-link text-dark " href="{{route('categories.create')}}">
                                    <span class="nav-link-text ms-1">Stwórz Kategorie</span>
                                </a>
                            </li>
                        @endcan
                        @can('post create')
                            <li class="nav-item">
                                <a class="nav-link text-dark " href="{{route('posts.create')}}">
                                    <span class="nav-link-text ms-1">Stwórz Post</span>
                                </a>
                            </li>
                        @endcan
                        <li class="nav-item mt-3">
                            <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Konto</h6>
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
                            <a class="nav-link text-dark " href="{{route('logout')}}">
                                <span class="nav-link-text ms-1">Wyloguj się</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
