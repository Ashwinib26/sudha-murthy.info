<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body
        {
            font-family: Arial, sans-serif;
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkIcCO76YIiOK1BDZ8e7nAI0Q317i2ZnLiKg&usqp=CAU");
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        .p{
            margin: 20px;
            /* padding: 20px; */
            font-size: large;
            font-family: 'Times New Roman', Times, serif;
            color:white;
        }
    </style>
<body>
    @extends('layout.app')
    @section('appContents')
        <br><br>
        <p class="p">
            Sudha Murthy began her professional career in computer 
            science and engineering. She is a member of the public 
            health care initiatives of the Gates Foundation.She has
            founded several orphanages, participated in rural 
            development efforts, supported the movement to provide 
            all Karnataka government schools with computer and 
            library facilities, and established Murthy Classical 
            Library of India at Harvard University.
        </p>
        <p class="p">
            Sudha Murthy wrote a postcard to the then Chairman of
            TELCO and complained about the gender bias in the 
            company. After this, she was interviewed and was 
            hired immediately, becoming the first female engineer
            hired at India's largest auto manufacturer TATA 
            Engineering and Locomotive Company (TELCO). She was 
            posted first posted in Pune as a  Development 
            Engineer and was later posted in Mumbai and 
            Jamshedpur. She also worked with Walchand group of 
            Industries at Pune as Senior Systems Analyst. 
            In the year 1996, she established the Infosys 
            Foundation and is currently the Chairperson of the 
            organization. She is also a visiting Professor at 
            Bangalore University. She was also a professor at 
            Christ University.
        </p>
        <p class="p">
            Murthy is best known for her philanthropy and her 
            contribution to literature in Kannada and English. 
            Dollar Bahu (lit. 'Dollar Daughter-in-Law'), a novel
            originally authored by her in Kannada and later 
            translated into English as Dollar Bahu, was adapted 
            as a televised dramatic series[10] by Zee TV in 2001.
            Runa (lit. 'Debt'), a story by Sudha Murthy was adapted
            as a Marathi film, Pitruroon by director Nitish 
            Bhardwaj. Sudha Murthy has also acted in the film as 
            well as a Kannada film Prarthana.
        </p>
    @endsection

</body>
</html>