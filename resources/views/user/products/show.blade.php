@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver Producto
                </div>

                <div class="panel-body">
                  <p><strong>Categoria</strong> {{ $cate_id->name }}</p>
                    <p><strong>Presentacion</strong> {{ $deta_id->delivery }}</p>
                    <p><strong>Codigo</strong> {{ $product->code }}</p>
                    <p><strong>Nombre</strong> {{ $product->name }}</p>
                    <p><strong>Cantidad</strong> {{ $product->amount }}</p>
                    <p><strong>Impuesto</strong> {{ $product->tax }}</p>

                    <a href="{{ route('products.pdfs') }}" class="btn btn-sm btn-info">
                        Descargar Informacion en PDF
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
