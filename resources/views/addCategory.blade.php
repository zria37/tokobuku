@extends('layouts.mainLayout')
@section('title', 'Add Categories')
@section('content')
<h1>Tambah Category</h1>
<div class="mt-5 w-50">
    <form action="/categories" method="POST">
        @csrf
        <div class="">
          <label for="name" class="form-label">Name:</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Category Name">
        </div>
        <div class="mt-5">
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>
</div>
@endsection