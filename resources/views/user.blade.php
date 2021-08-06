<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>User</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel = "stylesheet" type="text/css" href="/css/app.css">
        <style>
           body {
                font-family: 'Nunito', sans-serif;
                color: white;
                background-image: url('/images/muralArt.JPG');

                } 
        </style>

    </head>
    <body>
                

        <h1> Hello World! User View</h1>
        <h2>User Name {{$name}} </h2>
        <p> Name: {{$users['name']}}</p>
        <p> Email: {{$users['email']}}</p>
        <p> Phone: {{$users['phone']}}</p>

        <div>
            <h1>MY ART GALLERY</h1>
        </div>
    </body>
</html>