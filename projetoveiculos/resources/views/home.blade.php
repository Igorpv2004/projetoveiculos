<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Loja de Veículos</title>
</head>
<body>
<header>    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>
<section>

</section>



<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="{{'/img/moto.webp'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Motos Esportivas</h5>
        <p class="card-text">Encontre aqui as melhores motos esportivas com os melhores preços no mercado!</p>
        <button type="button" class="btn btn-primary">Primary</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/mobi.webp'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Carros Casuais</h5>
        <p class="card-text">Encontre aqui os melhores carros casuais com os melhores preços no mercado!</p>
        <button type="button" class="btn btn-primary">Primary</button>
      </div>

    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/biz.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Motos Casuais</h5>
        <p class="card-text">Encontre aqui as melhores motos esportivas com os melhores preços no mercado!</p>
        <button type="button" class="btn btn-primary">Primary</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/carro.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Carros Esportivos</h5>
        <p class="card-text">Encontre aqui os melhores carros esportivos com os melhores preços no mercado!</p>
        <button type="button" class="btn btn-primary">Primary</button>
      </div>
    </div>
  </div>
</div>

<footer>

<section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #00000;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Register for free</span>
          <button type="button" class="btn btn-outline-light btn-rounded">
            Sign up!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

</footer>
    
</body>
</html>