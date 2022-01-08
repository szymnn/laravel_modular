@section('UserInfo')
    @if(auth()->user()->hasRole('Admin'))
        <h3 id="simple-table-with-actions">Ostatnie Logowania Użytkowników</h3>
        <div class="card">
            <div class="table-responsive">

                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lp.</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nazwa użytkownika</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Adres IP</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$log->id}}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$log->name}}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$log->ip_address}}</p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-normal">{{$log->created_at}}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="container-fluid py-4">
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    @endif
@endsection


