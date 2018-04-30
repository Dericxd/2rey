{{ Form::hidden('user_id',auth()->user()->id)}}

<div class="form-group">
  {{ Form::label('product_id', 'Producto') }}
  {{ Form::select('product_id', $product, null, ['']) }}
</div>

<div class="form-group">
    {{ Form::label('date', 'Fecha') }}
    {{ Form::text('date', null, ['class' => 'form-control ', 'id' => 'datepicker'  ]) }}
</div>

<div class="form-group">
    {{ Form::label('amount', 'Cantidad') }}
    {{ Form::text('amount', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('status', 'Entrada') }}
    {{ Form::radio('status', null, ['class' => 'form-control']) }}
    {{ Form::label('status', 'Salida') }}
    {{ Form::radio('status', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Descripcion') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


@section('scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	CKEDITOR.config.height = 400;
  CKEDITOR.config.width  = 'auto';

  CKEDITOR.replace('description');
</script>
@endsection
