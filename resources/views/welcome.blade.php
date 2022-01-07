@extends('layouts.layout')

@section('content')
    @auth
    <div id="main-content" class="container-fluid py-4">
        <div class="row">
            @include('layouts.posts.post',$posts)
        </div>
    </div>
    @endauth
    @guest
        <div id="main-content" class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Treść widoczna tylko dla zalogowanych użytkowników!
                                <a href="{{route('login.page')}}" > Kliknij tutaj, aby się zalogować!</a></h4>
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">lub
                                <a href="{{route('register.page')}}"> Zarejestruj się!</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest
@endsection
