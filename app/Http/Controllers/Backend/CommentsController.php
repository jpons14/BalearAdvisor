<?php

namespace App\Http\Controllers\Backend;

use App\ComentarisModel;
use App\UserModel;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{
    public function index()
    {
        $message = Session::get('message');
        return view('backend.comentaris')->with('comments', ComentarisModel::all())->with('message', $message);
    }

    public function edit($id)
    {
        $users = UserModel::all();
        return view('backend.commentsEdit')
            ->with('comments', json_encode(ComentarisModel::where('id', $id)->take(1)->get()))
            ->with('id', $id)
            ->with('users', $users);
    }

    public function update(Request $request)
    {
        $input = Request::all();
        $comment = ComentarisModel::find($input['id']);
        $comment->update($input);
        return redirect('/backend/comentaris')->with('message', 'updated successfully');
    }

    public function create()
    {
        $input = Request::all();
        ComentarisModel::create($input);
        return redirect('/backend/comentaris')->with('message', 'created successfully');
    }

    public function add()
    {
        return view('backend.commentsAddForm');
    }

}
