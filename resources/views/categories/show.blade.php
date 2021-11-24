@extends('layouts.master')

@section('content')

    <div>
        <h1>Details Category </h1>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        {{-- @if (session()->has('message'))
            <h1 class="text-success">{{ session('message') }}</h1>
        @endif --}}
        {{-- {{ dd($categoryDetails) }} --}}
        {{-- {{ dd($categoryDetails->posts) }} --}}
        <br>
        <h4>All post from this category</h4>
       <table class="table">
       <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Post Title</th>
            <th scope="col">Category</th>
            <th scope="col">Status</th>
            <th scope="col">Author</th>

        </tr>
       </thead>
       <tbody>
        @foreach($categoryDetails->posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <th scope="row">{{$post->title}}</th>
            <th scope="row">{{$categoryDetails->name}}</th>
            <th scope="row">{{$post->status}}</th>
            <th scope="row">{{$post->user->full_name}}</th>


        </tr>
       </tbody>
    @endforeach
       </table>
       <h1>Id : {{ $categoryDetails->id }}</h1>
       <h1>Name : {{ $categoryDetails->name }}</h1>
       <h1>Status : {{ $categoryDetails->status === 1 ? 'Active' : 'Inactive' }}</h1>

        <div>
            <a href="{{ route('categories.edit',['id'=>$categoryDetails->id]) }}" type="submit" class="btn btn-primary mt-5">Edit</a>
        </div>
        <div>
            <a href="{{ route('categories.index') }}" type="submit" class="btn btn-primary mt-5">Delete</a>
        </div>

    </div>









@endsection
