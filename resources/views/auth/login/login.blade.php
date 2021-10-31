@extends('layouts.master')
@section('content')


    <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
        @if (session()->has('message'))
         <h1 class="@if(session('type') ==='success') 'text-success' @else 'text-danger' @endif">{{ session('message') }}</h1>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">

        </div>



        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>


        {{-- <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" name="photo" id="">
        </div> --}}

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
