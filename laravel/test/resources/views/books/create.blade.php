@extends('layouts.layout')

@section('title')Add @endsection

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
        <h2>Add a Book</h2>
      </div>

      <div>
        <form action="{{route('books.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="title" value="{{old('title', '')}}">
            </div>
            
            <div class="mb-3">
              <label for="author" class="form-label">Author</label>
              <input type="text" name="author" class="form-control" id="author" value="{{old('author', '')}}">
            </div>
            
            <div class="mb-3">
              <label for="isbn" class="form-label">ISBN</label>
              <input type="number" name="isbn" class="form-control" id="isbn" value="{{old('isbn', '')}}">
            </div>
            
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" name="price" class="form-control" id="price" value="{{old('price', 0)}}">
            </div>
            
            <div class="mb-3">
              <label for="available" class="form-label">Available</label>
              <input type="number" name="available" class="form-control" id="available" value="{{old('available', 0)}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
</div>

@endsection