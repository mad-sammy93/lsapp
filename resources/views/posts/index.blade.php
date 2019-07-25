@extends ('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
            <div class="col-md8 col-sm-8 p-4 d-flex flex-column position-static"> 
            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
            </div>
            <div class="col-md8 col-sm-8 p-4 d-flex flex-column position-static"> 
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post found</p>
    @endif
@endsection