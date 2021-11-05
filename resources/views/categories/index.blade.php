@extends('layouts.master')
@section('content')
{{--    {{dd($categories)}}--}}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">slug</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <th scope="row">{{$category->name}}</th>
                <th scope="row">{{$category->slug}}</th>
                <th scope="row">{{$category->status}}</th>
                <th scope="row">
                    <button class="btn btn-primary">Details</button>
                </th>

            </tr>
        @endforeach

        </tbody>
    </table>
{{ $categories->links() }}
@endsection
