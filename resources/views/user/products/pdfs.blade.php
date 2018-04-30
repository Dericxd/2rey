@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    Producto
                  </div>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th> Categoria </th>
                                <th> Detalle</th>
                                <th> Codigo</th>
                                <th> Producto</th>
                                <th> Cantidad</th>
                                <th> Impuesto</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->cate_id }}</td>
                                <td>{{ $product->deta_id }}</td>
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->amount }}</td>
                                <td>{{ $product->tax }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection
