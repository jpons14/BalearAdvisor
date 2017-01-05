<?php
namespace App\Http\Controllers;

use App\Comentaris;
use Illuminate\Http\Request;

class SeeController extends Controller
{
    public function comentaris() {
        $comments = Comentaris::all();
        return view('backend/comentaris')->with('comments', $comments);
    }
}
