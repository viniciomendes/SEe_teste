<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SEE | Vistoria Técnica</title>
  <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="/css/bootstrap/bootstrap-grid.css">
  <link rel="stylesheet" href="/css/fontawesome/css/all.css">
  <link rel="stylesheet" href="/resources/pnotify/pnotify.custom.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <script src="/js/jquery/jquery.js"></script>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-md navbar-green">
    <div class="container">
      <button class="navbar-toggler text-nav navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        Menu
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbar12">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="p-2 text-nav nav-link" href="/login">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="p-2 text-nav nav-link" href="/login/logout">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="container">
    <?php include $content; ?>
  </main>
  <script src="/js/bootstrap.js"></script>
  <script src="/js/popper/popper.js"></script>
  <script src="/resources/pnotify/pnotify.custom.min.js"></script>
  <script>
    <?php flash(); ?>
  </script>
  <script src="/js/app.js"></script>

</body>

</html>