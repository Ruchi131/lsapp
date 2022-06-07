@extends('layouts.app')

@section('content')
    <h1>Index page from posts folder</h1>
    <ul class="list-group">
        <!-- @if(count($posts)>0)
            @foreach($posts as $post)
                    <div class="card p-3">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}}</small>
                    </div>
            @endforeach
                {{$posts->links()}}
            @else
            <p>No posts available!!</p>
        @endif -->
        
        @forelse($posts as $post)
                <div class="card p-3">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
        @empty
            <p>No posts available!!</p>
        @endforelse
            {{$posts->links()}}

    </ul>
@endsection