@extends('layouts.app')

@section('content')
    <p>

    </p>
        <div >
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create New Post</a>
                   @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th> Tittle </th>
                            <th> Body</th>
                            <th> </th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td> {{$post->title}}</td>
                                <td> {!! $post->body !!}</td>

                                <th> <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edite</a> </th>
                                <th> </th>

                            </tr>



                        @endforeach
                        </table>
                       @else
                       <p>No data</p>
                    @endif


                </div>
            </div>
@endsection
