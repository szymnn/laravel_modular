{{--@include('layouts.components.sidebar')--}}
@foreach($posts as $post)
<div class="col-lg-6 col-md-6 mb-md-0 mb-6">
    <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{$post->title}}</h4>
            </div>
        </div>
        <div class="card-body">
            <h6 class="mb-0 ">Autor: {{$post->author}}</h6>
            <p class="text-sm ">{{$post->content}}</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">Dodano: {{$post->created_at}} </p>
            </div>
            <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">category</i>
                <p>Kategoria: {{$post->categories}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="container-fluid py-4">
{{ $posts->links() }}
</div>
