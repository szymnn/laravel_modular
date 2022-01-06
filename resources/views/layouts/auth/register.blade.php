@extends('layouts.layout')
@section('content')
    <div class="page-header align-items-start min-vh-100"  >
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Dołącz już dziś!</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" class="text-start" action="{{ route('register') }}" method="POST">
                                @method("POST")
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Nazwa użytkownika</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Hasło</label>
                                    <input type="password" class="form-control @error('passwrod') is-invalid @enderror" id="password" name="password" onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Powtórz hasło</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="text-center">
                                    <button type="subbmit" class="btn bg-gradient-primary w-100 my-4 mb-2">Zarejestruj się</button>
                                </div>
                                <p class="mt-4 text-sm text-center">
                                   Masz już konto?
                                    <a href="{{route('login.page')}}" class="text-primary text-gradient font-weight-bold">Zaloguj się!</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

