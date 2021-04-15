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
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
      body{
        background-color:#FF5043;
      }
        .modal-content{
            background-color: black;
            color: white;
        }

        .active{
            color: #FF5043;
        }
        h1{
      font-weight: 700;
      font-family: 'Cabin', sans-serif;
        }
      h2{
        font-weight: 600;
        font-family: 'Cabin', sans-serif;
      }
      h3{
        font-weight: 600;
        font-family: 'Cabin', sans-serif;
      }
      p{
          font-weight: 400;
          font-family: 'Cabin', sans-serif;
      }
      a{
        font-weight: 400;
        font-family: 'Cabin', sans-serif;
      }
      label{
        font-weight: 400;
        font-family: 'Cabin', sans-serif;
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