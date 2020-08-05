@extends('layouts.app')

@section('title', 'All Products')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <a href="{{route('posts.create')}}" class="btn btn-success">Add product</a>
    <table class="table table-stripedb mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->price}}</td>
            <td class="table-buttons">
                <a href="#" class="btn btn-success">
                    <i class="fa fa-eye"></i>
                </a>

                <a href="#" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                </a>
                <form method="POST" action="">
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </button>
                </form>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection