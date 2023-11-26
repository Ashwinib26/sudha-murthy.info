<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body
        {
            font-family: Arial, sans-serif;
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkIcCO76YIiOK1BDZ8e7nAI0Q317i2ZnLiKg&usqp=CAU");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .p1{
            margin: 20px;
            padding: 20px;
            font-size: xx-large;
            font-family: 'Times New Roman', Times, serif;
            color:white;
        }
        .p{
            margin: 20px;
            padding: 20px;
            font-size: x-large;
            font-family: 'Times New Roman', Times, serif;
            color:white;
        }
        .p2{
            margin: 20px;
            padding: 20px;
            font-size: xx-large;
            font-family: 'Times New Roman', Times, serif;
            text-align:right;
            color:white;
        }
    </style>
</head>
<body>
    @extends('layout.app')
    @section('appContents')
        <br>
        <p class="p1"><b><i>
            "The real joy of life is in giving. It’s not about receiving , it's about sharing."
            <br><br></b>
        - Sudha Murthy</i>
        </h1>
        <p class="p"> 
            Twitter : https://twitter.com/SmtSudhaMurtyauthor<br>
            Instagram : https://www.instagram.com/sudha_murthy_official/<br>
            Youtube : https://www.youtube.com/watch?v=FPBVgGqQNRc<br>
        </p>
        <br><br>
        <p class="p2"><b><i>
            Thank You for visiting our website !
        </p></b></i>
    @endsection
</body>
</html>
