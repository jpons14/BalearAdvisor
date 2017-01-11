@extends('backend.layout')
@section('title', 'Editar establiment')
@section('establimentsAcitve', 'active')
@section('body')
    <?php
    $establiments = json_decode($establiments);
    //    $tipusCuina = $establiments[0]->tipus_cuina;
    //    $tipusCuines = explode(',', $tipusCuina);
    //    dd($establiments);
    ?>
    <form action="/establiments/update" method="post" class="formestabliments">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <input type="hidden" name="id" value="{{$id}}"/>
                <div class="form-group">
                    <input type="text" name="nom" value="{{$establiments[0]->nom}}" placeholder="nom"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <textarea cols="20" name="descripcio_cat" rows="9"
                              class="form-control">{{$establiments[0]->descripcio_cat}}</textarea>
                </div>
                <div class="form-group">
                    <textarea cols="20" name="descripcio_esp" rows="9"
                              class="form-control">{{$establiments[0]->descripcio_esp}}</textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="horari_cat" class="form-control" value="{{$establiments[0]->horari_cat}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="horari_esp" class="form-control" value="{{$establiments[0]->horari_esp}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="poblacio" class="form-control" value="{{$establiments[0]->poblacio}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="adreca" class="form-control" value="{{$establiments[0]->adreca}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="telefon" class="form-control" value="{{$establiments[0]->telefon}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="web" class="form-control" value="{{$establiments[0]->web}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="preu" class="form-control" value="{{$establiments[0]->preu}}"/>
                </div>
                <div class="form-group">
                    <span class="text-warning col-md-12 text-center">Máximo 4 opciones</span>
                    <div class="col-md-3">
                        <select class="form-control tipuscuines" multiple name="">
                            @foreach($tipusCuina as $tCuina)
                                <option value="{{$tCuina->nom}}">{{$tCuina->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control tipuscuines" multiple name="">
                            @foreach($tipusCuina as $tCuina)
                                <option value="{{$tCuina->nom}}">{{$tCuina->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control tipuscuines" multiple name="">
                            @foreach($tipusCuina as $tCuina)
                                <option value="{{$tCuina->nom}}">{{$tCuina->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control tipuscuines" multiple name="">
                            @foreach($tipusCuina as $tCuina)
                                <option value="{{$tCuina->nom}}">{{$tCuina->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br /> <br /> <br />
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-default" value="Actualitza"/>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="hidden" name="tipus_cuina" value=""/>
            </div>
        </div>
    </form>
    <br/><br/>
    <script>
        $('form').submit(function (e) {
            var arr = '';
            $("option:selected").each(function () {
                arr += ',' + this.value;
            });
            arr = arr.replace(/^,|,$/g, '');
            console.log(arr);
            $('[name=tipus_cuina]').val(arr);
        });
    </script>
@endsection