<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$pageTitle}}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    <title>Document</title>
</head>
<body class="">
    <nav class="navbar navbar-expand" style="background-color: #AC2128">
        <a class="navbar-brand" href="#">
          <img src="images/Terafood.png" width="100px" height="20px" class="d-inline-block align-top ms-3" alt="">
          
        </a>
        <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="/home">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/produk">PRODUK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/resep">RESEP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/blog">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/kontak">KONTAK</a>
            </li>
          </ul>
        </div>
      </nav>

      @yield ('container')
</body>
</html>