<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App de tareas</title>

    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    

    <!-- BOX ICONS CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <style>
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
        body{
            background-color:#FF5043;
        }
        .modal-content{
            background-color: black;
            color: white;
        }
        .side-navbar {
  width: 180px;
  height: 100%;
  position: fixed;
  margin-left: -300px;
  background-color: #2D2D2D;
  transition: 0.5s;
}

.nav-link:active,
.nav-link:focus,
.nav-link:hover {
  background-color: #ffffff26;
}

.my-container {
  transition: 0.4s;
}

.active-nav {
  margin-left: 0;
}

/* for main section */
.active-cont {
  margin-left: 180px;
}

#menu-btn {
  background-color: #2D2D2D;
  color: #fff;
  margin-left: -62px;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navdash')
    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont">
      <!-- Top Nav -->
      <nav class="navbar top-navbar px-5">
        <a class="btn cta bg border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
      </nav>
      <!--End Top Nav -->
      @yield('content')
    </div>
    
    <!--JAVA BOOTSTAP!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
    crossorigin="anonymous"></script>
    <!-- custom js -->
    <script>
      var menu_btn = document.querySelector("#menu-btn");
      var sidebar = document.querySelector("#sidebar");
      var container = document.querySelector(".my-container");
      menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
      });
    </script>
    <script src="{{ asset('js/locomotive-scroll.min.js') }}"></script>
<script>
    const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
});
</script>
</body>
</html>