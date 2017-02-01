<?php
namespace App\Http\Controllers;

use App\ComentarisModel;
use App\EstablimentModel;
use App\TipusCuinaModel;
use App\User;
use App\UserModel;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class BackendController extends Controller
{
    public function index()
    {
        return view( 'backend.index' );
    }

    public function usersList()
    {
        $message = Session::get( 'message' );
        return view( 'backend.users' )->with( 'users', UserModel::all() )->with( 'message', $message );
    }

    public function comentarisList()
    {
        $message = Session::get( 'message' );
        return view( 'backend.comentaris' )->with( 'comments', ComentarisModel::all() )->with( 'message', $message );
    }

    public function establimentsList()
    {
//        $message = Session::get('message');
        return view( 'backend.establiments' )->with( 'establiments', EstablimentModel::all() );
//            ->with('message', $message);
//        return EstablimentModel::all();
    }

    public function userEdit( $id )
    {
        return view( 'backend.userEdit' )
            ->with( 'users', json_encode( UserModel::where( 'id', $id )->take( 1 )->get() ) )
            ->with( 'id', $id );
    }

    public function commentsEdit( $id )
    {
        $users = UserModel::all();
        return view( 'backend.commentsEdit' )
            ->with( 'comments', json_encode( ComentarisModel::where( 'id', $id )->take( 1 )->get() ) )
            ->with( 'id', $id )
            ->with( 'users', $users );
    }

    public function establimentEdit( $id )
    {
        $tipusCuina = TipusCuinaModel::all();
        return view( 'backend.establientsEdit' )
            ->with( 'establiments', json_encode( EstablimentModel::where( 'id', $id )->take( 1 )->get() ) )
            ->with( 'id', $id )
            ->with( 'tipusCuina', $tipusCuina );
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userUpdate( Request $request )
    {
        $input = Request::all();
        $user = UserModel::find( $input[ 'id' ] );
        $user->update( $input );
        return redirect( '/backend/users' )->with( 'message', 'updated successfully' );
    }

    public function commentUpdate( Request $request )
    {
        $input = Request::all();
        $comment = ComentarisModel::find( $input[ 'id' ] );
        $comment->update( $input );
        return redirect( '/backend/comentaris' )->with( 'message', 'updated successfully' );
    }

    public function establimentUpdate( Request $request )
    {
        $input = Request::all();
//        dd($input);
        $establiment = EstablimentModel::find( $input[ 'id' ] );
        $establiment->update( $input );
        return redirect( '/backend/establiments' )->with( 'message', 'updated successfully' );
    }

    public function commentCreate()
    {
        $input = Request::all();
        ComentarisModel::create( $input );
        return redirect( '/backend/comentaris' )->with( 'message', 'created successfully' );
    }

    public function commentsAddForm()
    {
        return view( 'backend.commentsAddForm' );
    }

    public function usersCreateForm()
    {
        return view( 'backend.usersCreateForm' );
    }

    public function userCreate()
    {
        $input = Request::all();
        UserModel::create( $input );
        return redirect( '/backend/users' )->with( 'message', 'User created successfully' );
    }

}
