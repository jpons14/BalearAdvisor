<?php
namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function index()
    {
        return view( 'login' )->with( 'message', Session::get( 'message' ) );
    }

    public function login( Request $request )
    {
        $users = UserModel::where( 'email', $_POST[ 'email' ] )
            ->where( 'password', $_POST[ 'password' ] )
            ->take( 1 )
            ->get();
        $users = json_decode( $users );
        if ( count( $users ) == 1 ) {
            session_start();
            $request->session()->set( 'login', true );
            return redirect( 'backend/index' );
        } else {
            return view( 'login' )->with( 'message', 'Email or password incorrects' );
        }
    }

    public function logout( Request $request )
    {
        $request->session()->set( 'login', false );
        return redirect( '/login' )->with( 'message', 'Logged out' );
    }
}
