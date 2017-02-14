{{--@include('frontend/header')--}}
@extends('frontend.layout')
@section('title', 'Comentaris')
@section('comentarisActive', 'active')
@section('body')
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Usuari</th>
                <th>Establiment</th>
                <th>Text</th>
                <th>Data</th>
                <th>Hora</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $key => $comment)
                <tr>
                    <td>{{$comment->usuari}}</td>
                    <td>{{$comment->establiment}}</td>
                    <td>{{$comment->text}}</td>
                    <td>{{$comment->data}}</td>
                    <td>{{$comment->hora}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection