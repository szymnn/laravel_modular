<div class="card card-profile mt-4">
    <div class="row">
    <h3 id="simple-table-with-actions">Lista Postów</h3>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center">ID</th>
            <th>Tytuł</th>
            <th>Autor</th>
            <th>Kategoria</th>
            <th class="text-right">Akcja</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td class="text-center">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->categories}}</td>
                <td class="td-actions text-right">
                    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                        @method("DELETE")
                        @CSRF
                        @if(auth()->user()->can('post edit') || auth()->user()->name == $post->author)
                            <a href="{{route('posts.edit', $post->id)}}" type="button" rel="tooltip" class="btn btn-success">
                                <i class="material-icons">edit</i>
                            </a>
                            @can('post edit')
                                    <button type="submit" rel="tooltip" class="btn btn-danger">
                                        <i class="material-icons">close</i>
                                    </button>
                            @endcan
                        @endif
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        {{ $posts->links() }}
    </table>
    </div>
</div>
