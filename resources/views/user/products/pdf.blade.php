@extends('layouts.app')

@section('content')
{{ Form::text('user',auth()->user()->name)}}
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th> Codigo</th>
                <th> Producto</th>
                <th> Cantidad</th>
                <th> Impuesto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->code }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->amount }}</td>
                <td>{{ $product->tax }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsectio
