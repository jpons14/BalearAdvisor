@extends('backend.layout')
@section('title', 'Users Backend')
@section('usersActive', 'active')
@section('body')
    <div class="container-fluid">
    <div class="col-md-10">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>email</th>
                <th>password</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nom}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td><a href="#"><i class="fa fa-times"></i> </a></td>
                    <td><a href="/user/edit/{{$user->id}}"><i class="fa fa-pencil"></i> </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
    @if(isset($message))
        <div id="snackbar"> {{$message }} </div>
    @endif
@endsection