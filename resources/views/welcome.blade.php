@extends('layouts.layout')

@section('content')
    <div id="main-content" class="container-fluid py-4">
        @yield('alerts')
        <div class="row">
            @include('layouts.posts.post')
{{--            @include('layouts.components.alerts')--}}
        </div>
    </div>
@endsection
