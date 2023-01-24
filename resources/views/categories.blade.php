@extends('layouts.mainLayout')
@section('title', 'Categories')
@section('content')
<h1>Category List</h1>
<div class="mb-5">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            {{-- <th>Slug</th> --}}
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categori as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td><a href="#">edit</a> <a href="#">delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
