@extends('backend.layout')
@section('title', 'Editar establiment')
@section('establimentsAcitve', 'active')
@section('body')
    <form action="/establiments/add" method="post" class="formestabliments">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-group">
                    <input type="text" name="nom" placeholder="nom"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <textarea cols="20" name="descripcio_cat" rows="9"
                              class="form-control" placeholder="descripció cat"></textarea>
                </div>
                <div class="form-group">
                    <textarea cols="20" name="descripcio_esp" rows="9"
                              class="form-control" placeholder="descripció esp"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="horari cat" name="horari_cat" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="horari esp" name="horari_esp" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="població" name="poblacio" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="adreça" name="adreca" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="telèfon" name="telefon" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="web" name="web" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="preu" name="preu" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="foto" name="foto" class="form-control" />
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
                    <input type="submit" class="form-control btn btn-default" value="Crear"/>
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