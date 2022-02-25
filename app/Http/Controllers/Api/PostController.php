<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use  App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
     public function index()
    {
       // $posts = Post::all();
        $posts = Post::with('user')->get();

        return PostResource::collection($posts);

    }
    public function show($postId)
    {
        $post=Post::find($postId);
        return new PostResource($post);

    }
    public function store(StorePostRequest $request)
    {
        $requestData=request()->all();
        $post=post::create($requestData);
        return new PostResource($post);

    }
}
