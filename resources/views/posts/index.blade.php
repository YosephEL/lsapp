@extends('layouts.app')@section('content')    <h1> Post page</h1>    <p> This is post page </p>    @if(count($posts)> 0)        @foreach($posts as $post)            <div class="well">                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>                <p><h5 class="card-title">{!!$post->body!!}</h5></p>                <small>Posted on: {{$post->created_at}}</small>                <br>                <small> posted by: {{$post->user->name}}</small>            </div>        @endforeach        {{$posts->links()}}    @else        <p>No post</p>    @endif@endsection