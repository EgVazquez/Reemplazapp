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

    <!-- Formulario e imagen de perfil-->
    <div class="modal-dialog text-center">
      <div>
        <div class="modal-content">
          <div>
            <img src="./avatar login.png" id="imagen-login">
          </div>
          <form id="formulario" method="POST">
            <div class="form-group">
              <fieldset>
                <legend>Seleccionar foto de perfil</legend>
                <input type="file" name="imagen1" src="avatar-login.jpg" required>
              </fieldset>
              <br>
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese su Nombre y Apellido" required>
              <input type="text" class="form-control" id="cuil" placeholder="Ingrese su CUIL" required>
              <input type="email" class="form-control" id="email" placeholder="Ingrese su E-mail" required>
              <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su Número de teléfono" required>
              <input type="password" class="form-control" id="clave" placeholder="Ingrese su contraseña" required><br>
              <select id="ubicacion" required>
                <option value="" disabled selected>Seleccionar ubicación</option>
                <option>Rosario</option>
                <option>Buenos Aires</option>
                <option>Cordoba</option>
              </select>
              <br>
              <div>
                <button type="submit" class="Login btn btn-primary" id="btn-enviar">Crear cuenta</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="botonCancelar" class="form-group">
      <a href="./index.html" class="btn btn-secondary" >Cancelar</a>
      </div>
    <!-- Botones Aceptar/Cancelar      
        <div id="botonCancelar">
            <a href="./index.html">
                <button class="Login btn btn-primary" type="button">Cancelar</button>
            </a>
        </div>
       <div onclick= "verificarformulario()" id="botonAceptar">
            <a href="./pantallaMapa.html">
              <button class="Login btn btn-primary" type="button" >Aceptar</button>


            </a>
        </div>-->
      </form>     
    <script src="js/validarnuevacuenta.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>