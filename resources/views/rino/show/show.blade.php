<x-app-layout menu="products" people="{{$people['slug']}}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>
    @if($products->count() == 0)
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-sm">
                        <div class="container d-block mt-5">
                            <img class="img-fluid-rino img-thumbnail-bg thumb-post"
                                 src="{{ asset('assets/images/rino/rino1-1.png') }}">
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="card-header">
                            <h4 class="card-title">Registro de Productos</h4>
                        </div>
                        <div class="card-body">
                            <p>Hola soy <b>Rino</b> y te guiaré por el proceso de crear productos,
                                de momento tenemos una única forma de crear productos, y es por medio de un formulario,
                                donde a medida que diligencies cada campo, este guardara tu información para que
                                puedas agilizar e ingresar productos de una manera eficiente
                            </p>
                            <p>
                                Da clic en <b>Registrar Productos</b> para continuar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="row justify-content-md-center">
                <div class="m-3 col-md-auto">
                    <a href="{{ route('show_rino_products_create',['people' => $people['slug']] ) }}"
                       class="btn btn-success  btn-lg shadow-lg  btn_guest ">Registrar Productos</a>
                </div>
            </div>
        </div>
    @else
        <div class="card">
            <div class="row justify-content-md-center px-3">
                <div class="m-2">
                    <a href="{{ route('show_rino_products_create',['people' => $people['slug']] ) }}"
                       class="btn btn-success btn-sg btn_guest_two ">Registrar Productos</a>
                </div>
            </div>
        </div>
    @endif

    <div class="container">
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">  {{ $product->name }}</h5>
                    <div class="card-subtitle mb-2 text-muted">
                        <div class="container d-block mt-5">
                            @if ($product->product_imgs->count() != 0)
                                <img class="thumb-post"
                                     src="{{ asset($product->product_imgs->where('order',0)->first()->file_path) }}">
                            @endif
                        </div>
                    </div>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        @endforeach
    </div>
    {{ $products->links() }}


</x-app-layout>
