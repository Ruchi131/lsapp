@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <h4>{{config('app.name','default Lsapp')}}</h4>
    <ul class="list-group">
        @if(count($services)>0)
            @foreach ($services as $items)
                <li class="list-group-item">{{ $items }}</li>
            @endforeach
        @endif
    </ul>
@endsection