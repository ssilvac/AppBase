@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($usuarioDetalle, ['route' => ['usuarioDetalles.update', $usuarioDetalle->id], 'method' => 'patch']) !!}

        @include('usuarioDetalles.fields')

    {!! Form::close() !!}
</div>
@endsection
