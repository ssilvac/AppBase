@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New post</div>

                <div class="panel-body">
                    
                    <form action="{{ url('publish') }}" role='form' method='POST'>

                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>


                        
                        <div class="form-group">
                            <label for="nombre_post">Nombre post</label>
                            <input type="text" class="form-control" id="nombre_post" name="nombre_post" placeholder="Nombre post">
                        </div>
                        
                        <div class="form-group">
                            <label for="text_post">Texto</label>
                            <textarea class="form-control" rows="3" name='text_post' id='text_post  '></textarea>     

                        </div>

                        <br>    

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
