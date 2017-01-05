<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/login.css">
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/toast.css" />

</head>
<body>
<div class="text-center" style="padding:50px 0">
    <div class="logo">login</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="login-form" action="/login" method="post" class="text-left">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="lg_username" class="sr-only">email</label>
                        <input type="text" class="form-control" id="lg_username" name="email"
                               placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="lg_password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="lg_password" name="password"
                               placeholder="Password">
                    </div>
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>forgot your password? <a href="#">click here</a></p>
                <p>new user? <a href="#">create new account</a></p>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </form>
    </div>
    <!-- end:Main Form -->
</div>

{{--<script src="/js/login.js"></script>--}}



<?php
use Illuminate\Support\Facades\Cookie;
if ( Cookie::get('login') == 'fail')
echo '<div id="snackbar">Invalid Login</div>';
?>
</body>
</html>