<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public $posts = [['id'=>1,'title'=>'first post','posted_by'=>'Ahmed','created_at'=>'2022-02-19 10:00:00'],
        ['id'=>2,'title'=>'second post','posted_by'=>'Mohamed','created_at'=>'2022-02-21 2:00:00']];
    public function index()
    {
        return view('posts.index',[
            'posts' => $this->posts
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function show($postId)
    {
        foreach($this->posts as $post)
        {
            if($postId == $post['id'])
            return view('posts.show',[
                'post' => $post
            ]);
        }
    }
    public function store()
    {
        $requestData = request()->all();
        return redirect()->route('posts.index');
    }
    public function edit($postId)
    {
        foreach($this->posts as $post)
        {
            if($postId == $post['id'])
            return view('posts.edit',[
                'post' => $post
            ]);
        }
    }
    public function update($postId)
    {
        $requestData = request()->all();
        foreach($this->posts as $i=>$post )
        {
            if($postId == $post['id'])
            {
                $this->posts[$i]['title']=$requestData['title'];
            }

        }
        return view('posts.index',[
            'posts' => $this->posts
        ]);
    }
}
