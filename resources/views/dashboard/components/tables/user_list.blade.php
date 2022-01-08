@section('UserList')
    @if(auth()->user()->hasRole('Admin'))
        <h3 id="simple-table-with-actions">Lista Użytkowników</h3>
        <div class="card">
            <div class="table-responsive">

                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lp.</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nazwa użytkownika</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Adres email</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ranga</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edycja Uprawnień</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$user->id}}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$user->name}}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$user->email}}</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-normal">{{$user->roles->pluck('name')}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-normal">{{$user->created_at}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <a href="{{route('users.edit', $user->id)}}" type="button" rel="tooltip" class="btn btn-success">
                                    <i class="material-icons">edit</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="container-fluid py-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
        <script>
            $('#role').on('change', function(e){
                $(this).closest('form').submit();
            });
        </script>
    @endif
@endsection



