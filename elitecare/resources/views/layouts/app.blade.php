<!DOCTYPE html>
<html>
    <title>elite dental care</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-pink.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('/css/elite.css')}}">
    <body>
      <!--  Header -->
         <header class="w3-theme-l1 w3-top">
                  <span class= "w3-opennav w3-hide-large w3-large w3-theme-l1" onclick="w3_open()"><i class="fa fa-bars"></i></span>
                  <img src="{{asset('/image/logo.png')}}" class="w3-hover-opacity" alt="Elite Dental Care">
                    <a class="btn " href="{{ url('/logout') }}">
                    <i class="material-icons  w3-right w3-margin "  title="Logout">power_settings_new</i>
                 </a>
                  <span class="w3-right w3-margin w3-slim">{{ Auth::user()->name }}</span>
            </header>

      <!-- Sidenav -->
      <nav class="w3-sidenav w3-collapse w3-large w3-theme-l5 w3-animate-left  sidebar">
          <a class="list-group-item" href="{{ url('/home') }}"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
          <a class="list-group-item" href="{{route('appointment.index')}}"><i class="fa fa-hospital-o fa-fw" aria-hidden="true"></i>&nbsp; Appointment</a>
          <a class="list-group-item" href="{{ url('/patient') }}"><i class="fa fa-wheelchair fa-fw" aria-hidden="true"></i>&nbsp; Patient</a>
      </nav>

      <!-- Overlay effect when opening sidenav on small screens -->
      <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>
      <div class="w3-main edc-main">
          <div class="w3-row w3-padding-64">
                 @yield('content')
           </div>
       </div>


      <script>
          // Script to open and close the sidenav
          function w3_open() {
              document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
              document.getElementsByClassName("w3-overlay")[0].style.display = "block";
          }

          function w3_close() {
              document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
              document.getElementsByClassName("w3-overlay")[0].style.display = "none";
          }
      </script>
    </body>
</html>