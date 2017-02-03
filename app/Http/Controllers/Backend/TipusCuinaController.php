<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Functions;
use App\TipusCuinaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request as InputRequest;
use Illuminate\Support\Facades\Session;

class TipusCuinaController extends Controller
{
    public function index( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $message = Session::get( 'message' );
            $tipusCuina = TipusCuinaModel::all();
            return view( 'backend.tipusCuina' )
                ->with( 'tipusCuines', $tipusCuina )
                ->with( 'message', $message );
        } else
            return redirect('/login')->with('message', 'you don\'t have permission');
    }

    public function edit( $id, Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $tipusCuina = TipusCuinaModel::where( 'id', $id )->take( 1 )->get();
            return view( 'backend.tipusCuinaEdit' )->with( 'tipusCuina', $tipusCuina[ 0 ] )->with( 'id', $id );
        } else
            return redirect('/login')->with('message', 'you don\'t have permission');
    }

    public function update( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $inputs = InputRequest::all();
            $tipusCuina = TipusCuinaModel::find( $inputs[ 'id' ] );
            $tipusCuina->update( $inputs );
            return redirect( '/backend/tipuscuina' )->with( 'message', 'Updated successfully' );
        } else
            return redirect('/login')->with('message', 'you don\'t have permission');
    }

    public function delete( $id, Request $request)
    {
        if (Functions::isLogged($request)){
            TipusCuinaModel::destroy($id);
            return redirect('/backend/tipuscuina')->with('message', 'deleted successfully');
        } else
            return redirect('/login')->with('message', 'you don\'t have permission');
    }

}
