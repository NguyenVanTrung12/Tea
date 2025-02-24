<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
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
        $new = News::all();
        return view('admin.comment.create', data: compact('new'));
    }

    
    public function store(Request $request)
    {
        $data = $request -> all('newId','name','email','comment','date','rate');
        Comment::create($data);
        return redirect() -> route('comment.index') -> with('success','Comment created successfully');
    }
    public function edit(Comment $comment)
    {
        $new = News::all();
        return view('admin.comment.edit', compact('comment' , 'new'));
    }
    public function update(Request $request, Comment $comment ,$id)
    {
        $comment = Comment::find($id);
        $request->validate([
            'comment' => 'required|max:255',
            ]);
            $comment->update($request->all());
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