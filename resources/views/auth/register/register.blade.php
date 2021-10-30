@extends('layouts.master')
@section('content')

    <h1>Registration</h1>

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
            <label for="" class="form-label">Full Name </label>
            <input type="text" class="form-control" id="" name="full_name" aria-describedby="">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="" class="form-label">Phone No </label>
            <input type="text" class="form-control" id="" name="phone_number" aria-describedby="">

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">
        </div>
        {{-- <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" name="photo" id="">
        </div> --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
