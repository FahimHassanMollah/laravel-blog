@extends('layouts.master')

@section('content')

    <div>
        <h1>Add Category </h1>
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
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
             <label for="exampleInputEmail1" class="form-label">Status</label>
            <select name="status" class="form-select" aria-label="Default select example">
                <option selected>Select Status</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>

            </select>

            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </form>

        <div>
            <a href="{{ route('categories.index') }}" type="submit" class="btn btn-primary mt-5">All category</a>
        </div>

    </div>









@endsection
