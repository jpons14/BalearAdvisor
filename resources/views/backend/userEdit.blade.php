@extends('backend.layout')
@section('title', 'edit user')
@section('usersActive', 'active')
@section('body')
    <form action="/user/update" method="post">
        <?php
        $users = json_decode( $users );
        ?>
        <input type="hidden" name="id" value="{{$id}}"/>
        <div class="container">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input class="form-control" id="nom" type="text" name="nom" value="{{$users[0]->nom}}"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$users[0]->email}}"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="text" name="password" id="password"
                           value="{{$users[0]->password}}"/>
                </div>
                <input type="submit" class="btn btn-success col-md-12" value="Modifica">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection