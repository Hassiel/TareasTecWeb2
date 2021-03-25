<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App de tareas</title>

    <!--CSS BOOTSTRAP!-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <style>
        h1, h2{
            font-family: 'Playfair Display', serif;
            font: 700;
        }
        h3, h4, h5{
            font-family: 'Playfair Display', serif;
            font: 400;
        }
        p{
            font-family: 'Poppins', sans-serif;
            font: 300;
        }
        label{
            font-family: 'Poppins', sans-serif;
            font: 400;
        }
        input{
            font-family: 'Poppins', sans-serif;
            font: 300;
        }
        button{
            font-family: 'Poppins', sans-serif;
            font: 500;
        }
        body{

            z-index: 0;
            background-image: url("https://uploads-ssl.webflow.com/602d69856e7e93d86886ef7e/602d6986d976270a8883bef3_06.%20Wisteria.jpg");
            background-position: 50% 50%;
            background-size: cover;
            background-attachment: fixed;
            background-opacity: 0;
        }
        .modal-content{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    @include('layouts.nav')
    @yield('content')
    <!--JAVA BOOTSTAP!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>