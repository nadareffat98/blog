@extends('layouts.app')
@section('title') edit @endsection
@section('put here')
<form method="post" action="{{route('posts.update',$post['id'])}}" class="mt-5">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{$post['title']}}"/>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" ></textarea>
  </div>
  <div class="mb-3 ">
    <label class="form-label" for="postCreator">Post Creator</label>
    <select name="postCreator" class="form-control">
        <option value="1">{{$post['posted_by']}}</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>   
@endsection 