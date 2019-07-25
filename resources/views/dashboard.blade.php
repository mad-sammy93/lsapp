@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Posts</a>
                    <h3>Your blog posts</h3>
                    @if(count($posts)>0)
                        <table class="table table-striped">
                            @foreach ($posts as $post)
                            <tr>
                                <div class="row mb-1">
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action'=> ['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}</td>
                                </div>
                            </tr> 
                            @endforeach
                        </table>
                    @else
                        <p>You don't have any posts published.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
