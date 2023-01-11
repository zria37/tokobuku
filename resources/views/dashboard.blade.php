@extends('layouts.mainLayout')
@section('title', 'Dashboard')
@section('content')
<h1> Welcome, {{Auth::User()->username}}</h1>
<div class="row mt-5">
    <div class="col-lg-4">
        <div class="card-data books">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-book-half"></i>
                </div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Books</div>
                    <div class="card-count">{{$Bookcount}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-data categorys">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-list-check"></i>
                </div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Category</div>
                    <div class="card-count">{{$categorycount}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-data users">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Users</div>
                    <div class="card-count">{{$usercount}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5">
    <h2>#Rent Log</h2>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Book Title</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7" style="text-align: center">No data</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection