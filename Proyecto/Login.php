<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
  <title>RemplApp</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <!-- Encabezado -->

  <header class="container-fluid bg-primary d-flex justify-content-center">
    <p class="text-light mb-0 p-2 fs-10">RemplApp</p>
  </header>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Acerca de
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Nosotros</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Vacantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
        <!--<form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-primary btn-primary-outline-success" type="submit">Buscar</button>
          </form>-->
      </div>
    </div>
  </nav>

  <!-- Formulario y avatar -->
  <!--<div class="modal-dialog text-center">
      <div>
          <div class="modal-content">
              <div>
                  <img src="./avatar login.png" id="imagen-login">
              </div>
              <form id="formulario" method="post">
                  <div class="form-group">
                    <input type="email" id="email" class="form-control" placeholder="Ingrese su email"  required minlength="8" >                        
                    <input type="password" id="password" class="form-control" placeholder="Ingrese su contraseña"  required minlength="8">
                  </div>
              </form>
          </div>
      </div>
    </div>-->
  <!--
    <div class="modal-dialog text-center">
      <div>
          <div class="modal-content">
              <div>
                  <img src="./avatar-login.png" alt="Avatar de inicio de sesión" id="imagen-login">
              </div>
              <form id="formulario" method="post">
                  <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese su email" required minlength="8" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">No compartiremos su correo electrónico con nadie más.</small>
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese su contraseña" required minlength="8" aria-describedby="passwordHelp">
                    <small id="passwordHelp" class="form-text text-muted">La contraseña debe tener al menos 8 caracteres.</small>
                  </div>
                  <button type="submit" class="btn btn-primary" <a href="./pantallaMapa.html">Iniciar sesión</a></button>
              </form>
          </div>
      </div>
    </div>-->
  <form id="formulario" method="post">
    <div class="form-group">
      <div>
        <img src="./avatar login.png" id="imagen-login">
      </div>
      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese su email" required minlength="8" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted" style="text-align: center;">No compartiremos su correo electrónico con nadie más.</small>
    </div>
    <div class="form-group">
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese su contraseña" required minlength="8" aria-describedby="passwordHelp">
      <small id="passwordHelp" class="form-text text-muted">La contraseña debe tener al menos 8 caracteres.</small>
    </div>
    <!--<div id="botonAceptar" class="form-group">-->
    <div id="botonSesion">
      <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
    </div>

    <!--</div>-->

  </form>
  <div id="botonCancelar" class="form-group">
    <a href="./index.html" class="btn btn-secondary">Cancelar</a>
  </div>
  <!-- Botones Aceptar/Cancelar -->
  <!--<td>
      <form method="post">
        <div id="botonCancelar">
            <a href="./index.html">
                <button class="Login btn btn-primary" type="button">Cancelar</button>
            </a>
        </div>
        <div id="botonAceptar">
            <button class="Login btn btn-primary" type="submit"><a href="./pantallaMapa.html"></a>Aceptar</button>
        </div>
      </form>     
    </td>-->
  <script src="js/Validarlogin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>