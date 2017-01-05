@extends('backend.layout')
@section('title', 'Edit comments')
@section('comentarisActive', 'active')
@section('body')
    <form action="/comments/update" method="post">
        <?php
        $comments = json_decode( $comments );
        ?>
        <input type="hidden" name="id" value="{{$id}}"/>
        <div class="container">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="usuari">Usuari</label>
                    <select name="usuari" class="form-control" id="usuari">
                        @foreach($users as $user)
                            <option value="{{$user->email}}">{{$user->email}}</option>
                        @endforeach
                    </select>
                    {{--<input class="form-control" id="usuari" type="text" name="usuari" value="{{$comments[0]->usuari}}"/>--}}
                </div>
                <div class="form-group">
                    <label for="establiment">Establiment</label>
                    <input type="text" class="form-control" id="establiment" name="establiment"
                           value="{{$comments[0]->establiment}}"/>
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea name="text" id="text" cols="30" class="form-control"
                              rows="10">{{$comments[0]->text}}</textarea>
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input class="form-control" type="text" name="data" id="data"
                           value="{{$comments[0]->data}}"/>
                </div>
                <div class="form-group">
                    <label for="hora">Hora</label>
                    <input class="form-control" type="text" name="hora" id="hora"
                           value="{{$comments[0]->hora}}"/>
                </div>
                <input type="submit" class="btn btn-success col-md-12" value="Modifica">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection