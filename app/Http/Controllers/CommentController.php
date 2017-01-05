<?php

namespace App\Http\Controllers;

use App\Comentari;

class CommentController extends Controller
{

    public function index(  ) {
        $comments = Comentari::all();
        return view('frontend/comentaris', compact('comments'));
    }

    public function edit( $id ) {
        $comment = Comentari::where('id', 1);
        echo '<pre>$comment' . print_r( $comment, true ) . '</pre>';
    }
}
