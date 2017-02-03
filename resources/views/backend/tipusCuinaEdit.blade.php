@extends('backend.layout')
@section('title', 'Tipus Cuina Edit')
@section('tipusCuinaActive', 'active')
@section('body')
    <form action="/tipuscuina/update" method="post">
        <input type="hidden" name="id" value="{{$id}}"/>
        <div class="container">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="nom">Nom del tipus de cuina</label>
                    <input type="text" class="form-control" id="nom" name="nom"
                           value="{{$tipusCuina->nom}}"/>
                </div>
                <input type="submit" class="btn btn-success col-md-12" value="Modifica">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection