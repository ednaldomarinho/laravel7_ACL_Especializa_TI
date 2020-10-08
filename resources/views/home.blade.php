@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($posts as $post)
        @can('view', $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Author: {{$post->user->name}}</b><br>
            <a href="{{url("/post/$post->id/update")}}">Editar</a><hr>
        @endcan
        
    @empty
        <p>Nenhum post cadastrado!!!</p>
    @endforelse
</div>
@endsection