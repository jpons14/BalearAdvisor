<?php

namespace App\Http\Controllers\Backend;

use App\EstablimentModel;
use App\Http\Controllers\Functions;
use App\TipusCuinaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Request as RequestInputs;

class EstablimentsController extends Controller
{
    public function index( Request $request )
    {
        if ( Functions::isLogged( $request ) )
            return view( 'backend.establiments' )->with( 'establiments', EstablimentModel::all() );
        else
            return redirect( '/login' );
    }

    public function edit( $id, Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $tipusCuina = TipusCuinaModel::all();
            return view( 'backend.establientsEdit' )
                ->with( 'establiments', json_encode( EstablimentModel::where( 'id', $id )->take( 1 )->get() ) )
                ->with( 'id', $id )
                ->with( 'tipusCuina', $tipusCuina );
        } else
            return redirect( '/login' );
    }

    public function update( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $input = RequestInputs::all();
            $establiment = EstablimentModel::find( $input[ 'id' ] );
            $establiment->update( $input );
            return redirect( '/backend/establiments' )->with( 'message', 'updated successfully' );
        } else
            return redirect( '/login' );
    }

    public function create( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $tipusCuina = TipusCuinaModel::all();
            return view( 'backend.establientsCreate' )->with( 'tipusCuina', $tipusCuina );
        } else
            return redirect( '/login' );
    }

    public function add( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $input = RequestInputs::all();
//            dd($input);

            EstablimentModel::create( $input );
            return redirect( '/backend/establiments' )->with( 'message', 'Establiment created successfully' );
        } else
            return redirect( '/login' );
    }

}
