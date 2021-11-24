@extends('layouts.master')

@section('content')

    <div>
        <h1>Add Posts </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('message'))
            <h1 class="text-success">{{ session('message') }}</h1>
        @endif
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <textarea name="content" type="text" class="form-control" id="" aria-describedby=""></textarea>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <select name="status" class="form-select" aria-label="Default select example">
                    <option selected>Select Status</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Select Category</label>
                <select name="category_id" class="form-select" aria-label="Default select example">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                    @endforeach


                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Create Post</button>
        </form>

        <div>
            <a href="{{ route('categories.index') }}" type="submit" class="btn btn-primary mt-5">All category</a>
        </div>

    </div>









@endsection
