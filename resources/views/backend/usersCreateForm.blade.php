@extends('backend.layout')
@section('title', 'Crear comentario')
@section('comentarisActive', 'active')
@section('body')
<form action="/user/create" method="post">
    <div class="col-md-9 col-md-offset-1">
        <div class="form-group">
            <input type="text" class="form-control" name="nom" placeholder="nom">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Plassword" />
        </div>
        <input type="submit" class="btn btn-default" value="Crear usuarir" />
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    </div>
</form>
@endsection