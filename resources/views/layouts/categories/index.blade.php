<div class="card card-profile mt-4">
    <table class="table">
        <thead>
        <tr>
            <th class="text-center">ID</th>
            <th>Nazwa</th>
            <th>Stworzona przez</th>
            <th class="text-right">Akcja</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td class="text-center">{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->author}}</td>
                <td class="td-actions text-right">
                    <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                        @method("DELETE")
                        @CSRF
                        @can('post edit')
                                <button type="submit" rel="tooltip" class="btn btn-danger">
                                    <i class="material-icons">close</i>
                                </button>

                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        {{ $categories->links() }}
    </table>
</div>


