@extends('layouts.app')@section('content')    <p>        <div class="card border-primary mb-2" style="max-width: 58rem;">            <h1><div class="card-header">{{$post->title}}</div></h1>            <div class="card-body text-primary">                <h5 class="card-title">{!!$post->body!!}</h5>                <p class="card-text">{{$post->created_on}}</p>            </div>        </div>    <p><a class="btn btn-primary btn-lg" href="/posts" role="button">back</a> </p>@endsection