{{--@include('layouts.components.sidebar')--}}
<div class="container">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-lg-12 col-12">
                <div class="card card-profile mt-4">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-1 ">
                            <div class="p-3 pe-md-0">
                                <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
                                    <i class="fas fa-clipboard opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-11 col-md-11 col-12 my-auto">
                            <div class="card-body ps-lg-0 col-lg-12 col-md-12 col-12">
                                <h5 class="mb-0">{{$post->title}}</h5>
                                <h6 class="text-info">Autor: {{$post->author}}</h6>
                                <p class="mb-0">{{$post->content}}</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm">Dodano: {{$post->created_at}} </p>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-9 col-md-9 col-9 ">
                                <div class="p-3 pe-md-0">
                                    <p>Kategoria: {{$post->categories}}</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                    @method("DELETE")
                                    @CSRF
                                    <div class="nav-wrapper position-relative end-0">
                                        <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                                            @can('post edit')
                                                <li class="nav-item">
                                                    <button type="submit" class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#code-popover" role="tab" aria-controls="code" aria-selected="false">
                                                        <i class="fas fa-trash-alt text-sm me-2" aria-hidden="true"></i> Usuń
                                                    </button>
                                                </li>
                                            @endcan
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="container-fluid py-4">
        {{ $posts->links() }}
        </div>
    </div>
</div>
