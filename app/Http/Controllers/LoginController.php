<?php
namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{

    public function index() {
        $users = UserModel::where('email', 'jponspons@gmail.com')->where('password', 'esselte14')->take(1)->get();
        $users = \GuzzleHttp\json_decode($users);
        return view( 'login' );
    }

    public function login(Request $request) {
        $users = UserModel::where( 'email', $_POST[ 'email' ] )->where('password', $_POST['password'])->take( 1 )->get();
        $users = json_decode( $users );
        if ( count( $users ) == 1 ) {
            session_start();
            $request->session()->set('login', true);
            return redirect( 'backend/index' );
        } else {
            return  view('login')->with( 'message', 'Email or password incorrects'  );
        }
    }

    public function logout()
    {
        unset($_COOKIE['PHPSESSID']);
//        session_destroy();
        return redirect('/login')->withCookie(cookie('message', 'logged out'));
    }
}
