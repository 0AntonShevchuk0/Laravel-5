<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function submit(CommentRequest $request) {
        $comment = new Comment();
        $comment->student_name = $request->input('student_name');
        $comment->student_surname = $request->input('student_surname');
        $comment->student_group = $request->input('student_group');
        $comment->comment = $request->input('comment');

        $comment->save();

        return redirect()->route('home')->with('success', 'comment was successfuly sended');
    }
}
