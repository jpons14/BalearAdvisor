@extends('backend.layout')
@section('title', 'Comentaris')
@section('comentarisActive', 'active')
@section('body')
    <div class="container">
        <div class="col-md-10">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Usuari</th>
                    <th>Establiment</th>
                    <th>Text</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $key => $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->usuari}}</td>
                        <td>{{$comment->establiment}}</td>
                        <td>{{$comment->text}}</td>
                        <td>{{$comment->data}}</td>
                        <td>{{$comment->hora}}</td>
                        <td><a href="/comment/edit/{{$comment->id}}"><i class="fa fa-pencil"></i> </a></td>
                        <td><a href="/comments/delete/{{$comment->id}}"><i class="fa fa-times"></i> </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="col-md-10">
        <a class="btn btn-default" href="/comments/add/form">Afegir comentari</a>
        </div>
    </div>
    @if(isset($message))
        <div id="snackbar"> {{$message }} </div>
    @endif
    <br />
    <br />
@endsection