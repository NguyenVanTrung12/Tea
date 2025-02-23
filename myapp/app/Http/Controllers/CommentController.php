<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class CommentController extends Controller
{
    public function index()
    {
        $cmt = Comment::with('new') -> orderBy('id', 'desc')->paginate(10);

        return view('admin.comment.index', compact('cmt'));
    }
    public function create()
    {
        return view('admin.comment.create');
    }

    
    public function store(Request $request)
    {
        $data = $request -> all('newId','name','email','comment','date','rate');
        Comment::create($data);
        return redirect() -> route('comment.index') -> with('success','Comment created successfully');
    }
    public function edit(Comment $comment)
    {
        return view('admin.comment.edit', compact('comment'));
    }
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->route('comment.index')->with('success', 'Comment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comment.index')->with('success', 'Comment deleted successfully.');
    }
}