<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وبلاگ {{ $title }}</title>
    
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">-->
    @notifyCss

    <style>
      table.table tbody tr td,
table.table thead tr th,
table.table thead {
  border-left: 1px dotted #fff;
  border-right: 1px dotted #fff;
}
    </style>
</head>
<body class="d-flex">

<div class="d-flex flex-column p-3 text-white bg-dark" style="width: 280px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <i class="fas fa-user mx-4"></i>
    <span class="fs-4">{{ auth()->user()->name }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link text-white mb-4 @if(request()->is('dashboard')) active @endif" aria-current="page">
        <i class="fas fa-tachometer-alt mx-2"></i>
        پیشخوان
        </a>
      </li>
      <li>
        <a href="{{ route('users.index') }}" class="nav-link text-white mb-4 @if(request()->is('panel/users') || request()->is('panel/users/*' )) active @endif">
        <i class="fas fa-users mx-2"></i>
        کاربران
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white mb-4">
        <i class="fas fa-braille mx-2"></i>
        دسته بندی ها
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white mb-4">
        <i class="fas fa-columns mx-2"></i>
        پست ها
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white mb-4">
        <i class="fas fa-comments mx-2"></i>
        نظرات
        </a>
      </li>
      <li>
        <a href="{{ route('landing') }}" class="nav-link text-white">
        <i class="fas fa-home mx-2"></i>
        خانه
        </a>
      </li>
    </ul>
    <hr>


    <a href="#" class="mb-3 text-decoration-none text-white" onclick="event.preventDefault; document.getElementById('logout-dashboard').submit()"><i class="fas fa-sign-out-alt mx-2"></i>Logout</a>
    <form method="POST" action="{{ route('logout') }}" id="logout-dashboard">
      @csrf
    </form>

 </div>

  {{ $slot }}

 
  </body>
  <script src="{{ ('/blog/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ ('/js.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
@notifyJs
<x:notify-messages />
{{ $scripts ?? '' }}

</html>