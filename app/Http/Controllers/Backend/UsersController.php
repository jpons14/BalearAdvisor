<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Functions;
use App\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index( Request $request )
    {
        if ( Functions::isLogged( $request ) )
            return view( 'backend.users' )->with( 'users', UserModel::all() )->with( 'message', 'message ' );
        else
            return redirect( '/login' );

    }

    public function edit( $id, Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            return view( 'backend.userEdit' )
                ->with( 'users', json_encode( UserModel::where( 'id', $id )->take( 1 )->get() ) )
                ->with( 'id', $id );
        } else
            return redirect( '/login' );
    }

    public function userUpdate( Request $request )
    {
        if ( Functions::isLogged( $request ) ) {
            $input = Request::all();
            $user = UserModel::find( $input[ 'id' ] );
            $user->update( $input );
            return redirect( '/backend/users' )->with( 'message', 'updated successfully' );
        } else
            return redirect( '/login' );
    }

    public function usersCreateForm( Request $request )
    {
        if ( Functions::isLogged( $request ) )
            return view( 'backend.usersCreateForm' );
        else
            return redirect( '/login' );
    }

    public function create(Request $request)
    {
        if (Functions::isLogged($request)) {
            $input = Request::all();
            UserModel::create( $input );
            return redirect( '/backend/users' )->with( 'message', 'User created successfully' );
        } else
            return redirect('/login');
    }
}
