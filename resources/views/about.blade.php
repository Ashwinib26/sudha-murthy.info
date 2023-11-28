<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
            padding: 20px;
            font-size: x-large;
            font-family: 'Times New Roman', Times, serif;
            color:white;
        }
        .p1{
            margin: 20px;
            font-size: x-large;
            font-family: 'Times New Roman', Times, serif;
            color:white;
        }
    </style>
</head>
<body>
    @extends('layout.app')
    @section('appContents')
        
        <p class="p"><i><b>
        "The beauty of a person lies in simplicity and confidence so leave life for yourself and not for others."</b>
        <br><br>
        - Sudha Murthy</i>
        </p></b>
        <p class="p1">
            Sudha Murthy (née Kulkarni) is an Indian engineering 
            teacher who excels as an author in Kannada, Marathi 
            and English language. She is mainly known for her 
            philanthropic work. She currently serves as the 
            Chairperson of the Infosys Foundation and is the wife
            of the co-founder of Infosys, N.R. Narayana Murthy.She
            was born on August 19, 1950, in Shiggaon, Haveri in 
            Karnataka, India, to Dr R. H. Kulkarni and Vimala 
            Kulkarni. She belongs to Deshastha Madhwa Brahmin 
            family.She is graduate in  Electrical and Electronics 
            Engineering from the B.V.B. College of Engineering & 
            Technology (presently known as KLE Technological 
            University). She completed her post-graduation in 
            Computer Science from the Indian Institute of Science.
        </p>
        <p class="p1">
            Sudha Murthy became the first female engineer hired at India's largest auto manufacturer TATA Engineering and Locomotive Company (TELCO).
            In 1996, she started Infosys Foundation and to date has been the Trustee of Infosys Foundation and a Visiting Professor at the PG Center of Bangalore University. She also taught at Christ University.
            Sudha Murthy has written and published many books 
            which include novels, non-fiction, travelogues, 
            technical books, and memoirs. Her books have been 
            translated into all major Indian languages. She is 
            also a columnist for English and Kannada newspapers.
        </p>
        <p class="p">
        Spouse	- N. R. Narayana Murthy
        <br>
        Children - Akshata Murthy and Rohan Murthy
        <br>
        Relatives - Rishi Sunak (son-in-law)</b>


    </p>
    @endsection
</body>
</html>