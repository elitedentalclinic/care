<!DOCTYPE html>
<html>
    <title>elite dental care</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-pink.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" type='text/css'>
    <link rel="stylesheet" href="{{asset('/css/elite-login.css')}}">
    <body>
        <section>
            <div class="w3-row">
                <div class="w3-col m4 l3 edc-login w3-theme-l1">
                       @yield('login-form')
                </div>
                <div class="w3-col m8 l9 w3-hide-small">
                    <p class="edc-main-content"> elite dental care</p>
                </div>
            </div>
         </section>
     </body>
</html>