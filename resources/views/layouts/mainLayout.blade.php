<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('asset/css/style1.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-success">
            <div class="container-fluid">
              <a class="navbar-brand fs-3 fw-bold" href="/dashboard">Rental Buku</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
          <div class="body-content h-100">
                <div class="row g-0 h-100">
                    <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                        @if (Auth::user()->role_id == 1)
                            <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a>
                            <a href="/books" @if(request()->route()->uri == 'books') class='active' @endif>Books</a>
                            <a href="/categories" @if(request()->route()->uri == 'categories') class='active' @endif>Categories</a>
                            <a href="/users" @if(request()->route()->uri == 'users') class='active' @endif>Users</a>
                            <a href="/rent-logs" @if(request()->route()->uri == 'rent-logs') class='active' @endif>Rent Log</a>
                            <a href="/logout">Logout</a>
                        @else
                            <a href="/profile" @if(request()->route()->uri == 'profile') class='active' @endif>Profile</a>
                            <a href="/logout">Logout</a>
                        @endif
                    </div>
                    <div class="content col-lg-10 p-5">@yield('content')</div>
                </div>
          </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>