<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body
        {
            font-family: Arial, sans-serif;
            /* margin: 30px;
            padding: 30px; */
            background-image: url("https://i.pinimg.com/736x/09/a8/26/09a82659edb43e80a7d5b7889251411c.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        .para
        {
            font-size:xx-large;
            margin: 20px;
            padding: 20px;
            text-align:right;
            color:white;
        }
        header {
            /* background-color: #333;
            color: #fff;
            padding: 10px; */
            text-align: center;
        }
    </style>
</head>
<body>
    @extends('layout.app')
    @section('appContents')
        
        <p class="para"><i><b>
            <br>
            
            "Vision without action is merely<br> a dream <br> action without vision is merely<br> passing time<br> but vision and action together <br> can change the
            World !"
            <br><br></i></b><i>
            - Sudha Murthy</i>
        </p>
    @endsection
</body>

</html>