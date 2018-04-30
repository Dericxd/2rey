<div class="form-group">
    {{ Form::label('cedula', 'Cedula') }}
    {{ Form::text('cedula', null, ['class' => 'form-control', 'id' => 'cedula']) }}
</div>
<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('last', 'Apellido') }}
    {{ Form::text('last', null, ['class' => 'form-control', 'id' => 'last']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'Correo') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Contraseña') }}
    {{ Form::text('password', null, ['class' => 'form-control', 'id' => 'password']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
