@extends('dashboard.layouts.layout')

@section('dashboard')

    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Utwórz nowy post</h4>
    </div>

    <form action="{{ route('posts.store') }}" method="POST">
        @method('POST')
        @csrf
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Wprowadź tytuł posta</label>
            <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="input-group input-group-static mb-4">
            <label for="exampleFormControlSelect1" class="ms-0">Wybierz kategorię</label>
            <select class="form-control  @error('categories') is-invalid @enderror" id="categories" name="categories">
                @foreach ($categories as $value)
                    <option>{{$value->name}}</option>
                @endforeach
            </select>
            @error('categories')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-group input-group-dynamic">
            <textarea class="form-control @error('content') is-invalid @enderror" rows="5" name="content" placeholder="Wpisz treść posta" spellcheck="false"></textarea>
            @error('content')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="text-center">
            <button type="subbmit" class="btn bg-gradient-primary w-100 my-4 mb-2">Utwórz post!</button>
        </div>

    </form>
    @include('layouts.posts.index')
@endsection
