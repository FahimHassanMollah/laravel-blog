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
