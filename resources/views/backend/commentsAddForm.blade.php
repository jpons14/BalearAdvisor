@extends('backend.layout')
@section('title', 'Crear comentario')
@section('comentarisActive', 'active')
@section('body')
    <form action="/comments/create" method="post">
        <div class="col-md-9 col-md-offset-1">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="usuari" name="usuari">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="establiment" name="establiment">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" placeholder="text" name="text">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" placeholder="data" name="data">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" placeholder="hora" name="hora">
            </div>
            <input class="btn btn-success" type="submit" value="Crear comentari">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection