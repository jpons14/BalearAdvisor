<?php

namespace App\Http\Controllers\Backend;

use App\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index() {
        $message = Session::get( 'message' );
        return view( 'backend.users' )->with( 'users', UserModel::all() )->with( 'message', $message );
    }
    public function userEdit( $id ) {
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

    public function userCreate()
    {
        $input = Request::all();
        UserModel::create($input);
        return redirect('/backend/users')->with('message', 'User created successfully');
    }
}
