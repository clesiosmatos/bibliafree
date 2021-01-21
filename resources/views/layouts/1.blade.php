<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>@yield('title') - Bíblia Free</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
    
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">Bíblia Free</p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="/">Home</a>
    <a class="p-2 text-dark" href="/themes">Temas</a>
  </nav>
</header>

<div class="container">
    @yield('content')

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="../assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Bíblias</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="/acf">ACF - Almeida Corrigida Fiel</a></li>
          <li><a class="link-secondary" href="/ara">ARA - Almeida Revista e Atualizada</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Temas</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Amizae</a></li>
          <li><a class="link-secondary" href="#">Amor</a></li>
          <li><a class="link-secondary" href="#">Aniversário</a></li>
          <li><a class="link-secondary" href="#">Bom dia</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Sobre</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Equipe</a></li>
          <li><a class="link-secondary" href="#">Privacidade</a></li>
          <li><a class="link-secondary" href="#">Termos</a></li>
          <li><a class="link-secondary" href="#">Contato</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>


    
  </body>
</html>
