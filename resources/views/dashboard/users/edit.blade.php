@extends('layouts.layout')
@section('content')
    <div class="page-header align-items-start min-vh-100"  >
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Edycja Uprawnień Użytkownika</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.update', $user->id) }}">
                                <label>Nazwa użytkownika</label>
                                <div class="input-group input-group-outline my-3">
                                    <input type="text" onfocus="focused(this)"  class="form-control" value="{{ $user->name }}" disabled >
                                </div>
                                @method('PUT')
                                @csrf
                                <label>Uprawnienia</label>
                                <select id="role" name="role"  class="mt-1 form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 form-control  @error('role') is-invalid @enderror">
                                    <option value="">{{$user->roles->pluck('name')}}</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="text-center">
                                    <button type="subbmit" class="btn bg-gradient-primary w-100 my-4 mb-2">Edytuj użytkownika</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

