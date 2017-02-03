@extends('backend.layout')
@section('title', 'Tipus Cuina')
@section('tipusCuinaActive', 'active')
@section('body')
    <div class="container">
        <div class="col-md-10">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tipusCuines as $key => $tipusCuina)
                    <tr>
                        <td>{{$tipusCuina->id}}</td>
                        <td>{{$tipusCuina->nom}}</td>
                        <td><a href="/tipuscuina/edit/{{$tipusCuina->id}}"><i class="fa fa-pencil"></i> </a></td>
                        <td><a href="/tipuscuina/delete/{{$tipusCuina->id}}"><i class="fa fa-times"></i> </a></td>
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