<?php
namespace App\Http\Controllers;

use App\UserModel;
use App\UsuariModelCati;
use DB;
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
//        $usuaris = UsuariModelCati::where( 'email', $_POST[ 'email' ] )->where( 'password', $_POST[ 'password' ] )->take( 1 )->get();
        $users = UserModel::where( 'email', $_POST[ 'email' ] )
            ->where( 'password', $_POST[ 'password' ] )
            ->take( 1 )
            ->get();
//        dd($_POST);
        $users = json_decode( $users );
//        $users = json_decode( $usuaris );
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

    public function cifrarContrasenas(  )
    {
        $usuaris = DB::table('usuaris')->get();
        $array = array();
//        dd($usuaris);
        foreach ( $usuaris as $key => $usuari ) {
            $array[$key][] = sha1($usuari->password);
        }

        foreach ( $array as $key => $item ) {
            $key++;
            DB::update("UPDATE
            'usuaris' SET 'password' = '$item[0]' 
            WHERE 'id' = '$key'");
        }
//        dd($array);
    }
}
