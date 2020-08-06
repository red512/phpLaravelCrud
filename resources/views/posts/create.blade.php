@extends('layouts.app')

@section('title', 'Add product')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
            <label for="post-title">Product name</label>
            <input type="text" name="title"
                   value="{{old('title')}}" class="form-control" id="post-title">

        </div>

        <div class="form-group">
            <label for="post-description">Description</label>
            <textarea name="description" class="form-control" id="post-description" rows="3">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="post-price">Price</label>
            <input type="text" name="price"
                   value="{{old('price')}}" class="form-control" id="post-price">
        </div>

        <button type="submit" class="btn btn-success"> Add product</button>
    </form>
    </div>
    </div>
@endsection
