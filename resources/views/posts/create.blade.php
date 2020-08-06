@extends('layouts.app')

@section('title', 'Add product')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
            <label for="post-title">Product name</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">

            <label for="post-description">Product description</label>
            <textarea name="description" class="form-control" id="post-description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="post-price">Price</label>
            <input type="text" name="price" class="form-control" id="exampleFormControlInput1">
        </div>

        <button type="submit" class="btn btn-success"> Add product</button>
    </form>
    </div>
    </div>
@endsection
