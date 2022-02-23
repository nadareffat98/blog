<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $posts = Post::paginate(2);
        return view('posts.index',[
            'posts' => $posts
        ]);
    }
    public function create()
    {
        $users = User::all();
        return view('posts.create',[
            'users'=> $users
        ]);
    }
    public function show($postId)
    {
            $post = Post::find($postId);
            return view('posts.show',[
                'post' => $post
            ]);
    }
    public function store(StorePostRequest $request)
    {
        // $requestData = request()->all();
        $validated = $request->validated();
        $validated = $request->safe()->only(['Title', 'Description','user_id']);
        Post::create($validated);
        return redirect()->route('posts.index');
    }
    public function edit($postId)
    {
        $users = User::all();
        $post = Post::find($postId);
            return view('posts.edit',[
                'post' => $post,
                'users'=> $users
            ]);
    }
    public function update($postId,StorePostRequest $request)
    {
        $requestData = request()->all();
        $post = Post::find($postId)->update(['Title' => $requestData['Title'],
        'Description' => $requestData['Description'],
        'user_id' => $requestData['user_id']]);
        return redirect()->route('posts.index');
    }
    public function destroy($postId)
    {
        $requestData = request()->all();
        $post = Post::find($postId)->delete();
        return redirect()->route('posts.index');
    }
}
