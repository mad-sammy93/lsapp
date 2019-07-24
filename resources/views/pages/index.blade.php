@extends ('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <div class="container">
            <h1>{{$title}}</h1>
            <p>This ois the appplication </p>
            <p><a href="/login" role="button" class="btn-primary btn-lg m-2">Login</a><a href="/register" class="btn btn-primary btn-success btn-lg m-2">Register</a></p>
        </div>
    </div>
@endsection

