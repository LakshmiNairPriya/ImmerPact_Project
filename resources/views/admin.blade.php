<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<div class="d-flex" id="wrapper">
    <div class="sidebar">
    <h3>Admin</h3><hr>
    <h4>Menu</h4>
    <ul class="ulsb">
     <li><a href="{{url('/dashboard')}}"><i class="bi bi-square"></i>Dashboard</a></li>
     <li><a href="{{url('/customerform')}}"><i class="bi bi-pencil"></i>Create Customer</a></li>
     <li><a href="{{url('/customerlist')}}"><i class="bi bi-people-fill"></i>Customers</a></li>
     <li><a href=""><i class="bi bi-graph-up"></i>Charts</a></li>
     <li><a href=""><i class="bi bi-chat-left-text"></i>Messages</a></li>
     <li><a href=""><i class="bi bi-square"></i>Current status</a></li>
    </ul>
</div>
<div id="navbar">
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom"id=>
            <button class="btn btn-secondary" id="menu-toggle"><i class="bi bi-justify-left"></i></button>
            <button class="btn btn-secondary" id="menu-toggles"><i class="bi bi-justify-right"></i></button>
            <form class="d-flex" id="form">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
      </form>
    
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="bi bi-person-circle"></i> {{Auth::user()->name}}
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Settings</a></li>
    <li><a class="dropdown-item" href="{{route('logout')}}"onclick="event.preventDefault();
document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
    
  </ul>
</div>
           
           
        
</div></div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script>
$(document).ready(function(){
$("#menu-toggle").click(function(){
$(".sidebar").hide();
$('#menu-toggle').hide();
$("#menu-toggles").show();
$("#dropdownMenuButton1").css("margin-left","650px")
});
$("#menu-toggles").click(function(){
    $(".sidebar").show();
$('#menu-toggle').show();
$("#menu-toggles").hide(); 
$("#dropdownMenuButton1").css("margin-left","350px")
});
});
    </script>
</body>
</html>
