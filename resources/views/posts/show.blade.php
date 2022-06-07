@extends('layouts.app')

@section('content')
    <h1>{{$posts->title}}</h1>
    <small>Written on {{$posts->created_at}}</small>
    <div class="well well-sm">
        <h3>{{$posts->body}}</h3>
    </div>
    <a href="/posts" class="btn btn-primary">BACK</a>
@endsection
