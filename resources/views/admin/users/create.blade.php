@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'usuarioDetalles.store']) !!}

        @include('usuarioDetalles.fields')

    {!! Form::close() !!}
</div>
@endsection
