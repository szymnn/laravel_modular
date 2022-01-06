@extends('layouts.layout')

@section('content')
    <div id="main-content" class="container-fluid py-4">
        <div class="row">
            @include('layouts.posts.post')
{{--            @include('layouts.components.alerts')--}}
        </div>
    </div>
@endsection
