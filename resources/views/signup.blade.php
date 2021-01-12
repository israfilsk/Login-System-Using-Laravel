@extends('layout')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>
<body>
    <div class="container">
        <h1>SignUp Now</h1>
        <form action="register" method="POST">
            {{csrf_field()}}
            <input type="text" name="username" class="input" placeholder="Username" required><br><br>
            <input type="email" name="email" class="input" placeholder="Email" required><br><br>
            <input type="password" name="password" class="input" placeholder="Password" required minlength='4' maxlength='20'><br><br>
            <button type="submit" class="submit-btn"><b>SignUp</b></button>
            <p>Already have an account <span><a href="login">LogIn</a></span></p>
        </form>
    </div>

@stop
</body>
</html>