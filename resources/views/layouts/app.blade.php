<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وبلاگ {{ $title }}</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">-->
</head>
<body>
<div class="bg-dark mb-3 pb-5 text-white">
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
      <a href="{{ route('landing') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <h2>Blog</h2>
      </a>

      <div class="text-end">
          <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="{{ route('register') }}"><button type="button" class="btn btn-warning">Register</button></a>
      </div>
    </header>
  </div>

  
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex justify-content-center py-3">
  <div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ route('landing') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Programming
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hack
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

</div>
{{ $slot }}

<div class="overlay"></div>
<script src="{{ ('/blog/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ ('/js.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>
</html>