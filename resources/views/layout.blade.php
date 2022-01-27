<!doctype html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link type="image/x-icon" rel="shortcut icon" href="images/favicon.ico">
        <link type="image/png" sizes="16x16" rel="icon" href="images/favicon-16x16.png">
        <link type="image/png" sizes="32x32" rel="icon" href="images/favicon-32x32.png">
        <link type="image/png" sizes="96x96" rel="icon" href="images/favicon-96x96.png">
        <link type="image/png" sizes="120x120" rel="icon" href="images/favicon-120x120.png">
        <link rel="stylesheet" href="/css/default.css">
    </head>

<body class="bg">

    <div class="wrapper">
        <div class="main_content">

            @yield('main_content')

        </div>
    </div>


    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
        <span class="footer-text">© 2022 All right reserved | Development by <a href="https://vk.com/goldentypeav">GoldenTypeAV</a></span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        </ul>
    </footer>

</body>

</html>