@extends('backend.layout')
@section('title', 'Edit establiments')
@section('establimentsAcitve', 'active')
@section('body')
    <div class="container">
        <div class="col-md-10">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Descripcio Cat</th>
                    <th>Descripcio Esp</th>
                    <th>web</th>
                    <th>telefon</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($establiments as $establiment)
                    <tr>
                        <td>{{$establiment->id}}</td>
                        <td>{{$establiment->nom}}</td>
                        <td>{{$establiment->horari_cat}}</td>
                        <td>{{$establiment->horari_esp}}</td>
                        <td>{{$establiment->web}}</td>
                        <td>{{$establiment->telefon}}</td>
                        <td><a href="/establiment/edit/{{$establiment->id}}"><i class="fa fa-pencil"></i> </a></td>
                        <td><a href="#"><i class="fa fa-times"></i> </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection