<?php

namespace App\Http\Controllers\Backend;

use App\ComentarisModel;
use App\Http\Controllers\Functions;
use App\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{
    public function index( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $message = Session::get( 'message' );
            return view( 'backend.comentaris' )->with( 'comments', ComentarisModel::all() )->with( 'message', $message );
        } else
            return redirect( '/login' );
    }

    public function edit( $id, Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $users = UserModel::all();
            return view( 'backend.commentsEdit' )
                ->with( 'comments', json_encode( ComentarisModel::where( 'id', $id )->take( 1 )->get() ) )
                ->with( 'id', $id )
                ->with( 'users', $users );
        } else
            return redirect( '/login' );
    }


    public function update( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $input = Request::all();
            $comment = ComentarisModel::find( $input[ 'id' ] );
            $comment->update( $input );
            return redirect( '/backend/comentaris' )->with( 'message', 'updated successfully' );
        } else
            return redirect( '/login' );
    }

    public function create( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $input = Request::all();
            ComentarisModel::create( $input );
            return redirect( '/backend/comentaris' )->with( 'message', 'created successfully' );
        } else
            return redirect( '/login' );
    }

    public function add( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            return view( 'backend.commentsAddForm' );
        } else {
            return redirect( '/login' );
        }
    }

    public function delete( $id, Request $request )
    {
        if (Functions::isLogged($request)){
            ComentarisModel::destroy($id);
            return redirect('/backend/comentaris')->with('message', 'deleted successfully');
        } else
            return redirect('/login');
    }

}
