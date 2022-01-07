@extends('dashboard.layouts.layout')

@section('dashboard')
    <div class="container">
        <div class="row">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-xl-6 col-sm-6 mb-xl-6 mb-6">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <h2 class="text-sm mb-0 text-capitalize">Twoje dane</h2>
                                    <p class="mb-0">Nazwa: {{auth()->user()->name}}</p>
                                    <p class="mb-0">Email: {{auth()->user()->email}}</p>
                                    <p class="mb-0">Ranga: {{auth()->user()->roles->pluck('name')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 mb-xl-6 mb-6">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">query_stats</i>
                                </div>
                                <div class="text-end pt-1">
                                    <h2 class="text-sm mb-0 text-capitalize">Twoje statystyki</h2>
                                    <p class="mb-0">EXP: {{auth()->user()->stats->exp}}</p>
                                    @can('post create')
                                        <p class="mb-0">Posty: {{auth()->user()->stats->posts}}</p>
                                    @endcan
                                    <p class="mb-0">Komentarze: {{auth()->user()->stats->coments}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
