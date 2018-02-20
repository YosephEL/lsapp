@extends('layouts.app')@section('content')    <p><a class="btn btn-primary btn-lg" href="/posts" role="button">back</a> </p>    <p>        <div class="card border-primary mb-2" style="max-width: 58rem;">            <h1><div class="card-header">{{$post->title}}</div></h1>            <div class="card-body text-primary">                <h5 class="card-title">{!!$post->body!!}</h5>                <p class="card-text">On: {{$post->created_on}}</p>            </div>    <hr>    <p><a class="btn btn-default" href="/posts/{{$post->id}}/edit">Edit</a> </p>    <div>    {!!Form::open(['action'=>['PostsController@destroy',$post->id], 'method'=> 'POST', 'class' =>'pull-right'])!!}        {{Form::hidden('_method','DELETE')}}        {{Form::submit('delete',['class' => 'btn btn-danger'])}}        {!!Form::close()!!}    </div>@endsection