@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <h1>LogIn Now</h1>
        <form action="log" method="POST">
            {{csrf_field()}}
            <input type="email" name="email" class="input" placeholder="Email" required><br><br>
            <input type="password" name="password" class="input" placeholder="Password" required minlength='4' maxlength='20'><br><br>
            <button type="submit" class="submit-btn"><b>LogIn</b></button>
            <p>Don't have an account <span><a href="signup">SignUp</a></span></p>
        </form>
    </div>
@stop   
</body>
</html>