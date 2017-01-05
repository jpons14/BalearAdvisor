<?php
namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{

    public function index() {
        return view( 'login' );
    }

    public function login() {
        $users = UserModel::where( 'email', $_POST[ 'email' ] )->take( 1 )->get();
        $users = json_decode( $users );
        if ( count( $users ) > 0 ) {
            session_start();
            return redirect( 'backend/index' );
        } else {
            return redirect( 'login' )->withCookie( cookie( 'login', 'fail' ) );
        }
    }
}
