<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title') - Bíblia Free</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="https://i.ibb.co/gZpNCbC/bible.png" type="image/x-icon"/>
    <script src="https://kit.fontawesome.com/67fa0e0185.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <p style="cursor: pointer;" onclick="window.location.href='/version/{{ $version }}'" class="h5 my-0 me-md-auto fw-normal"><img style="width: 30px;" src="https://i.ibb.co/gZpNCbC/bible.png"> Bíblia Free </p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="/version/{{ $version }}">Home</a>
    <a class="p-2 text-dark" href="/themes">Temas</a>
  </nav>
</header>

<div class="container">
    @yield('content')

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2021-2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Bíblias</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="/version/acf">ACF - Almeida Corrigida Fiel</a></li>
          <li><a class="link-secondary" href="/version/ara">ARA - Almeida Revista e Atualizada</a></li>
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
