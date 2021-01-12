@extends('layout')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
    background-color: rgb(169, 189, 226);
    }
    </style>
</head>
<body>

<h1>Hello  {{Session::get('user')}} welcome to your profile</h1>

@stop   
</body>
</html>