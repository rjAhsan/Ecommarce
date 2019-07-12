<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <meta name="csrf-token" value="{{ csrf_token() }}" />

</head>
<body>
<div id="app">
<div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#"><strong><span>LOGO</span></strong></a>

    <!-- Links -->
    <ul class="navbar-nav">
       <li class="nav-item">
       <span>     <router-link to="/home">Home</router-link>
       </span>
       </li>
        <li class="nav-item">
            <router-link to="/CreatePost">Service</router-link>

        </li>
        <li class="nav-item">
            <router-link to="/About">About</router-link>
        </li>
    </ul>
</nav>
</div>
    <router-view></router-view>
</div>
</body>
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
</body>
</html>