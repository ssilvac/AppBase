@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Change your password</div>

                <div class="panel-body">
                    <form method='POST' action="{{ url('account/password') }}">
                        {{ csrf_field() }}
                        <input type="text" name="current_password">

                        <input type="text" name="password">    

                        <input type="text" name='password_confirmation'>
                        
                        <button type='submit'>Change password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
