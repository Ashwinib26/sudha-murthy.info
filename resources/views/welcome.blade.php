<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @extends('layout.app')
    @section('appContents')
        <h1> Home Page </h1>
        <p><i>
            "Vision without action is merely a dream <br> action without vision is merely passing time<br> but vision and action together can change the
            World"
            <br><br>
            - Sudha Murthy</i>
        </p>
    @endsection
    <!-- <a href="/"> HOME </a><br><br>
    <a href="/about"> ABOUT </a><br><br>
    <a href="/history"> HISTORY </a><br><br>
    <a href="/achievements"> ACHIEVEMENTS </a><br><br>
    <a href="/contact"> CONTACT </a><br> -->
</body>
</html>