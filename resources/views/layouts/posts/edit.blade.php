@extends('dashboard.layouts.layout')

@section('dashboard')

    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Edycja posta autorstwa {{$post->author}}</h4>
    </div>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Tytuł posta</label>
            <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" value="{{$post->title}}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="input-group input-group-static mb-4">
            <label for="exampleFormControlSelect1" class="ms-0">Wybierz kategorię</label>
            <select class="form-control  @error('categories') is-invalid @enderror" id="categories" name="categories" value="{{$post->categories}}">
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
            <textarea class="form-control @error('content') is-invalid @enderror" rows="5" name="content" placeholder="Wpisz treść posta" spellcheck="false" >{{$post->content}}</textarea>
            @error('content')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="text-center">
            <button type="subbmit" class="btn bg-gradient-primary w-100 my-4 mb-2">Edytuj post</button>
        </div>

    </form>
@endsection
