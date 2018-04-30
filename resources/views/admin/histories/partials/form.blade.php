<div class="form-group">
  {{ Form::label('product_id', 'Producto') }}
  {{ Form::select('product_id', $products, null, ['']) }}
</div>


<div class="form-group">
    {{ Form::label('date', 'Fecha') }}
    {{ Form::text('date', null, ['class' => 'form-control', 'id' => 'datepicker']) }}
</div>

<div class="form-group">
    {{ Form::label('cost', 'Costo') }}
    {{ Form::text('cost', null, ['class' => 'form-control', 'id' => 'cost']) }}
</div>
<div class="form-group">
    {{ Form::label('sell', 'Venta') }}
    {{ Form::text('sell', null, ['class' => 'form-control', 'id' => 'sell']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
