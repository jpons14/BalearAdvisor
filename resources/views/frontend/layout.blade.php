<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/custom.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('frontend.home')}}">BalearAdvisor</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="@yield('comentarisActive')"><a href="/comentaris">Comentaris </a></li>
                <li class="@yield('restaurantsActive')"><a href="{{route('frontend.restaurants')}}">Restaurants</a></li>
                <li class="@yield('contacteActive')"><a href="{{route('frontend.contact')}}">Contacte</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Login</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
@yield('body')
</body>
</html>