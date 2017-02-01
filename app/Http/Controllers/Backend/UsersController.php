<?php

namespace App\Http\Controllers\Backend;

use App\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index(Request $request) {
        $value = $request->session()->all(  );
        echo '<pre>$value' . print_r( $value['login'], true ) . '</pre>';
//        $message = Session::get( 'message' );
        if ( LOG_ALERT == $value[ 'login' ] ) {
            return view( 'backend.users' )->with( 'users', UserModel::all() )->with( 'message', 'message ' );
        } else {
            return redirect( '/login' );
        }
    }
    public function edit( $id ) {
        return view( 'backend.userEdit' )
            ->with( 'users', json_encode( UserModel::where( 'id', $id )->take( 1 )->get() ) )
            ->with( 'id', $id );
    }
    public function userUpdate( Request $request ) {
        $input = Request::all();
        $user = UserModel::find( $input[ 'id' ] );
        $user->update( $input );
        return redirect( '/backend/users' )->with( 'message', 'updated successfully' );
    }

    public function usersCreateForm()
    {
        return view('backend.usersCreateForm');
    }

    public function create()
    {
        $input = Request::all();
        UserModel::create($input);
        return redirect('/backend/users')->with('message', 'User created successfully');
    }
}
