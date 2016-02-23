<!-- Usuario Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
	{!! Form::select('usuario_id', [], null, ['class' => 'form-control']) !!}
</div>

<!-- Fono Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fono', 'Fono:') !!}
	{!! Form::text('fono', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('direccion', 'Direccion:') !!}
	{!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ciudad', 'Ciudad:') !!}
	{!! Form::select('ciudad', [], null, ['class' => 'form-control']) !!}
</div>

<!-- Comuna Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('comuna', 'Comuna:') !!}
	{!! Form::select('comuna', [], null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('pais', 'Pais:') !!}
	{!! Form::select('pais', [], null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
