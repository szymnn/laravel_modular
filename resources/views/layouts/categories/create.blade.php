@extends('dashboard.layouts.layout')

@section('dashboard')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Utwórz nową kategorię</h4>
                </div>

                <form action="{{ route('categories.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nazwa kategorii</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="subbmit" class="btn bg-gradient-primary w-100 my-4 mb-2">Utwórz kategorię!</button>
                    </div>
                </form>
                <h3 id="simple-table-with-actions">Lista kategorii</h3>
            </div>
            <div class="col-lg-12">
                @include('layouts.categories.index')
            </div>
        </div>
    </div>
@endsection
