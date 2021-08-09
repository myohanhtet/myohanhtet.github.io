<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Web Developer">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, JAVA">
    <meta name="author" content="Myo Han Htet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Myo Han Htet">
    <meta property="og:description" content="I’m a developer, not a coder">
    <meta property="og:image" content="images/cover.jpg">
    <meta property="og:url" content="https://myohanhtet.com">

    <meta name="twitter:title" content="Web Developer"> 
    <meta name="twitter:description" content="I’m a developer, not a coder">
    <meta name="twitter:image" content="images/cover.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="color-scheme" content="dark light">

    <style>
      :root {
        color-scheme: light dark; /* both supported */
      }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>{{$siteName}} @yield('pageTitle')</title>
  </head>
  <body>
    <div class="px-4 my-3 text-center">
        <img class="rounded-circle mg-thumbnail d-block mx-auto mb-4" src="https://avatars.githubusercontent.com/myohanhtet" alt="" width="100" height="100">
        <h1 class="display-5 fw-bold">Hello</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">I’m a developer, not a coder</p>
          
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="@url('/')" title="Github page" class="btn btn-outline-dark btn-lg px-4 gap-3">Home</a>
            <a href="@url('blog')" title="Github page" class="btn btn-outline-dark btn-lg px-4 gap-3">Blog</a>
            <a href="https://github.com/myohanhtet" title="Github page" class="btn btn-outline-dark btn-lg px-4 gap-3"><i class="fab fa-github"></i></a>
            <a href="https://fb.com/myohanhtet.ly" title="Facebook" class="btn btn-outline-primary btn-lg px-4"><i class="fab fa-facebook"></i></a>
            <a href="mailto:myohanhtet.ly@gmail.com" type="email" title="Email" class="btn btn btn-outline-danger btn-lg px-4"><i class="fas fa-envelope-square"></i></i></a>
          </div>
        </div>
      </div>
    <div class="container-sm">
        @yield('body')
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="@url('assets/css/all.css')">
</head>

<body>

<nav>
    <div class="wrapper">
        <strong>{{$siteName}}</strong>

        <ul>
            <li><a href="@url('/')">Home</a></li>
            <li><a href="@url('blog')">Blog</a></li>
            <li><a href="@url('about')">About</a></li>
            <li><a href="https://github.com/themsaid/katana">Github</a></li>
            <li><a href="https://themsaid.github.io/katana">Docs</a></li>
        </ul>
    </div>
</nav>

<div class="wrapper m-t-30">
    @yield('body')
</div>

<div class="clearfix"></div>

</body>
</html> --}}
