@extends('layouts.master')
@section('content')
{{--    {{dd($categories)}}--}}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Post Title</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <th scope="row">{{$post->title}}</th>
                <th scope="row">{{$post->category->name}}</th>
                <th scope="row">{{$post->user_id}}</th>
                <th scope="row">
                    <a href="{{ route('posts.show',['post'=>$post->id]) }}" class="btn btn-primary">Details</a>
                </th>

            </tr>
        @endforeach

        </tbody>
    </table>
{{ $posts->links() }}
@endsection
