
@extends('layouts.master')

@section('content')

  <div>
      <h1>Welcome to Dashboard </h1>
      <div>
          <a href="{{ route('categories.create') }}" class="btn btn-warning">Create Category</a>
      </div>
      <div>
          <a href="{{ route('posts.index') }}" class="btn btn-warning">Create post</a>
      </div>
  </div>









@endsection
