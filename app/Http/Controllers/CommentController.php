<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCommentRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Notifications\AddComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{

    public function store(SaveCommentRequest $request, Post $post)
    {
        /**
         * @var Comment $comment
         */
        $comment = $post->comments()->create([
            'user_id' => \Auth::id(),
            'body' => request('body')
        ]);
        if ($comment->id) {
            $post->user->notify(new AddComment($comment));
        }
        return back();
    }
}
