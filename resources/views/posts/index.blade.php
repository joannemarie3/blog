@extends('main')

@section('title', '| All Posts')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>All Posts</h1>
    </div>

    <div class="">

    <div class="col-md-2">
      <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Post</a>
    </div>
   <div class="col-md-12">
     <hr>

</div>
  </div> <!-- end of .row -->
  <div class="col-md-12">
    <table class="table">
 <thead>
   <th>#</th>
   <th>Title</th>
   <th>Body</th>
   <th>Created At</th>

 </thead>
 <tbody>
   @foreach ($posts as @post)

<tr>
  <th>{{ $post->id}}</th>
  <td>{{ $post->title}}</td>
  
 </table>
          </div>
  </div>
  @stop
