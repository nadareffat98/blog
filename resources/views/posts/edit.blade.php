@extends('layouts.app')
@section('title') edit @endsection
@section('put here')
<form method="post" action="{{route('posts.update',$post['id'])}}" class="mt-5">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="Title" aria-describedby="emailHelp" value="{{$post['Title']}}"/>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="Description" class="form-control" >{{$post['Description']}}</textarea>
  </div>
  <div class="mb-3 ">
    <label for="postCreator" class="form-label">Post Creator</label>
                <select name="user_id" class="form-control" id="">
                    @foreach($users as $user){

                        <option value="{{$user->id}}">{{$user->name}}</option>

                    }
                    @endforeach
                </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>   
@endsection 