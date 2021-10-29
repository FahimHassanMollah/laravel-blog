@extends('layouts.master')
@section('content')
@if(session()->has('message'))
    {{ session('message') }}
@endif
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
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
            <input type="text" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" value="{{ old('password')}}" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" name="photo" id="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
