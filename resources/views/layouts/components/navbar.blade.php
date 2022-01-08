@section('navbar_mainsite')
    <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow  my-3 py-2 start-0 end-0 mx-4 fixed-top ">
        <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{route('index.page')}}">
                SK - RECRUITER ANSWER
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </span>
            </button>
            <div class="collapse navbar-collapse ps" id="navigation">
                <ul class="navbar-nav mx-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link me-2" href="{{route('dashboard.page')}}">
                                <i class="fa fa-user opacity-6 text-dark me-1" aria-hidden="true"></i>
                                Witaj {{auth()->user()->name}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="{{route('logout')}}">
                                <i class="fas fa-sign-out-alt opacity-6 text-dark me-1" aria-hidden="true"></i>
                                Wyloguj się
                            </a>
                        </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{route('login.page')}}">
                            <i class="fas fa-user opacity-6 text-dark me-1" aria-hidden="true"></i>
                            Zaloguj się!
                        </a>
                    </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{route('register.page')}}">
                                    <i class="fas fa-key opacity-6 text-dark me-1" aria-hidden="true"></i>
                                    Zarejestruj się!
                                </a>
                            </li>
                    @endguest
                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
    </nav>
@endsection
@section('navbar_dashboard')
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
@endsection
