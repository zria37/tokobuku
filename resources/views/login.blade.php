<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Rental Buku | Login </title>
    <link rel="stylesheet" type="text/css" href="{{asset('/asset/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{asset('/asset/img/wave.png')}}">
	<div class="container">
		<div class="img">
			<img src="{{asset('/asset/img/bg.svg')}}">
		</div>
		<div class="login-content">
			<form action="login" method="POST" >
                @csrf
				<img src="{{asset('/asset/img/avatar.svg')}}">
				<h2 class="title">Log-in</h2>
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('massage') }}
                    </div>
                @endif
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="registrasi">Registrasi</a>
            	<input type="submit" class="btn" value="Login">
                {{-- <input type="button" class="btn" value="Registrasi" href="registrasi"> --}}
                {{-- <a href="registrasi" class="btn">Registrasi</a> --}}
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('/asset/js/main.js')}}"></script>
</body>
</html>