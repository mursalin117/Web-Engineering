@extends('layouts.layout')

@section('title')Add @endsection

@section('content')

<div class="card text-center m-5">
    <div class="card-header">
      Book Details
    </div>
    <div class="card-body">
      <h5 class="card-title">Title: {{ $book->title }}</h5>
      <p class="card-text">Author: {{ $book->author }}</p>
      <p class="card-text">Author: {{ $book->isbn }}</p>
      <p class="card-text">Author: {{ $book->price }}</p>
      <p class="card-text">Author: {{ $book->available }}</p>
      <a href="{{ route('books.edit', ['book' => $book]) }}" class="btn btn-primary">Edit</a>
      <a href="{{ route('books.index') }}" class="btn btn-secondary">Go Back</a>
    </div>
    <div class="card-footer text-muted"></div>
  </div>

@endsection