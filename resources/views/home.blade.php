@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @include('partials/errors')
            @include('partials/success')


            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection