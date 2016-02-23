@extends('layouts.app')

@section('content')

    <div class="container">

        {!! Alert::render() !!}

        <div class="row">
            <h1 class="pull-left">Users</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="">Add New</a>
        </div>

        <div class="row">
            @if($users->isEmpty())
                <div class="well text-center">No Users found.</div>
            @else
                @include('admin.users.table')
            @endif
        </div>

        {{ $users->render() }}


    </div>
@endsection