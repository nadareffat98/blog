@extends('layouts.app')
@section('title') posts @endsection
@section('content')
    <div class="text-center mt-3">
           <a href="{{route('posts.create')}}" class="btn btn-success text-center"> Create Post</a>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['Title']}}</td>
      <td>{{$post->slug}}</td>
      <td>{{$post->user->name}}</td>
      <td>{{$post['created_at']->toDateString()}}</td>
      <td class="justify-content-start d-flex">
          <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
          <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-primary">Edit</a>
          <form method="POST" action="{{route('posts.destroy' ,$post['id'])}}">
            @csrf
            @method('DELETE')
             <button type="submit" class="btn btn-danger" onclick="return confirm('You are about to delete this post ,Are you sure')">Delete</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="row justify-content-start">
  {{$posts->links()}}
 </div>
@endsection

