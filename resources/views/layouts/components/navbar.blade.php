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
