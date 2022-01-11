<html>
{{--COMPONENTS--}}
@include('layouts.components.footer')
@include('layouts.components.head')
@include('layouts.components.header')

    <head>
        @stack('head')
    </head>

    <body class="g-sidenav-show  bg-gray-200">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Utwórz nowy post</h4>
                            </div>

                            <form action="{{ route('shop_controller.store') }}" method="POST">
                                @method('POST')
                                @csrf

                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Wprowadź tytuł </label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name">

                                </div>

                                <div class="input-group input-group-static mb-4">
                                    <label for="exampleFormControlSelect1" class="ms-0">Wybierz kategorię</label>
                                    <select class="form-control  @error('categories') is-invalid @enderror" id="categories" name="categories">
                                            <option>test</option>
                                    </select>

                                </div>
                                <div class="input-group input-group-dynamic">
                                    <label for="exampleFormControlSelect1" class="ms-0">Wpisz Krótki Opis</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" rows="5" name="description" placeholder="Wpisz treść posta" spellcheck="false"></textarea>

                                </div>
                                <div class="input-group input-group-dynamic">
                                    <label for="exampleFormControlSelect1" class="ms-0">Wpisz Dodatkowy Opis</label>
                                    <textarea class="form-control @error('additional_info') is-invalid @enderror" rows="5" name="additional_info" placeholder="Wpisz treść posta" spellcheck="false"></textarea>

                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Wprowadź cene </label>
                                    <input type="number" class="form-control  @error('price') is-invalid @enderror" name="price">

                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Wprowadź ilość towaru </label>
                                    <input type="number" class="form-control  @error('amount') is-invalid @enderror" name="amount">

                                </div>
                                <div class="text-center">
                                    <button type="subbmit" class="btn bg-gradient-primary w-100 my-4 mb-2">Utwórz produkt!</button>
                                </div>
                                @error('name')
                                <h1 class="invalid-feedback">
                                    {{ $message }}
                                </h1>
                                @enderror
                                @error('categories')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                @error('additional_info')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                @error('amount')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </form>
                            <div class="col-lg-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
