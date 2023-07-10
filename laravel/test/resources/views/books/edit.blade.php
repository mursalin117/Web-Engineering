@extends('layouts.layout')

@section('title')Update @endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger mt-2 mb-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container mt-2 mb-2">
    <div>
      <div>
        <h2>Update a Book</h2>
      </div>

      <div>
        <form action="{{ route('books.update', ['book' => $book]) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="title" value="{{ $book->title }}">
            </div>
            
            <div class="mb-3">
              <label for="author" class="form-label">Author</label>
              <input type="text" name="author" class="form-control" id="author" value="{{ $book->author }}">
            </div>
            
            <div class="mb-3">
              <label for="isbn" class="form-label">ISBN</label>
              <input type="number" name="isbn" class="form-control" id="isbn" value="{{ $book->isbn }}">
            </div>
            
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" name="price" class="form-control" id="price" value="{{ $book->price }}">
            </div>
            
            <div class="mb-3">
              <label for="available" class="form-label">Available</label>
              <input type="number" name="available" class="form-control" id="available" value="{{ $book->available }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
      </div>
    </div>
</div>

@endsection