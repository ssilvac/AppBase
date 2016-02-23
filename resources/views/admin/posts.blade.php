@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @include('partials/errors')
            @include('partials/success')
            
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                <div class="panel-body">
                    
                    <h2>Listado de POST</h2>
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
