@extends('layouts.app')
@section('title') show @endsection
@section('put here')
<div class="card mt-3">
  <h5 class="card-header">Post Info</h5>
  <div class="card-body">
    <h5 class="card-title" >Title :-</h5>
    <p class="card-text">{{$post['Title']}}</p>
  </div>
  <div class="card-body">
    <h5 class="card-title">Description :- </h5>
    <p class="card-text">{{$post['Description']}}</p>
  </div>
</div>  
<div class="card mt-3">
  <h5 class="card-header">Post Creator Info</h5>
  <div class="card-body">
    <h5 class="card-title">Name :- </h5>
    <p class="card-text">{{$post->user->name}}</p>
  </div>
  <div class="card-body">
    <h5 class="card-title">Email :- </h5>
    <p class="card-text">{{$post->user->email}}</p>
  </div>
  <div class="card-body">
    <h5 class="card-title">Created At:- </h5>
    <p class="card-text">{{$post['created_at']->isoFormat('dddd Do of MMMM OY LTS')}}</p>
  </div>
</div>  
@endsection 