<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tienda en línea</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="menu-desplegable.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index-principal.php">Compra tecnica</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto nav">
          <li class="navbar-item active">
            <a class="nav-link" href="2index-signup.php">Registrarse</a>
          </li>

          <?php
              if (!isset($_SESSION['IDUSUARIO'])){ ?>
                  <li class="navbar-item active">
                      <a href="4index-login.php" class="nav-link">Entrar</a>
                  </li>
          <?php }
          ?>
          <?php
              if (isset($_SESSION['IDUSUARIO'])){ ?>
                  <li class="navbar-item active">
                      <a href="3logout.php" class="nav-link">Cerrar</a>
                  </li>
          <?php }
          ?>
              <li class="navbar-item active">
              <a href="3mostrarCarrito.php" class="nav-link">Carrito(<?php
                  echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>)
              </a>
          </li>

          <li class="navbar-item active">
              <a class="nav-link" href="#">Catálogo</a>
              <ul>
                <li><a href="4index-catalogo-tv.php">Televiciones</a></li>
                <li><a href="4index-catalogo-pc.php">Computadoras de escritorio</a></li>
                <li><a href="4index-catalogo-laptops.php">Lap tops</a></li>
                <li><a href="4index-catalogo-cel.php">Celulares</a></li>
                <li><a href="4index-catalogo-bocinas.php">Bocinas</a></li>
                <li><a href="4index-catalogo-consolas.php">Consolas de videojuegos</a></li>
              </ul>
          </li>
         <li class="navbar-item active">
            <a class="nav-link" href="index-contacto.php">Contacto</a>
          </li>
          <li class="navbar-item active">
             <a class="nav-link" href="index-infogeneral.php">Sobre nosotros</a>
           </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Compra tecnica</h1>
        <h2 class="masthead-subheading mb-0">la mejor tienda en línea</h2>
        <a href="index-infogeneral.php" class="btn btn-primary btn-xl rounded-pill mt-5">Más información</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/principal/bocinas.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Audio</h2>
            <p>Prepara la mejor de las fiestas con nuestras bocinas, el mejor sonido para disfrutar con tus amigos.</p>
            <a href="4index-catalogo-bocinas.php" class="btn btn-primary">Ir a catálogo &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/principal/computadoras.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Computadoras de escritorio</h2>
            <p>Todo lo que necesitas para trabajar desde casa, llevate toda la tecnología en computadoras de escritorio con la mejor velocidad y al mejor precio.</p>
            <a href="4index-catalogo-pc.php" class="btn btn-primary">Ir a catálogo &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/principal/laptop.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Laptops</h2>
            <p>Para la casa u oficina, lleva tu computadora a donde quieras. Las mejores computadoras compactas y livianas.</p>
            <a href="4index-catalogo-laptops.php" class="btn btn-primary">Ir a catálogo &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/principal/televiciones.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Televiciones</h2>
            <p>Tuviste un duro día en el trabajo y lo que buscas es llegar a descansar a tu casa, llevate la mejor televisión para esos ratos de descanso y entretenimientos.</p>
            <a href="4index-catalogo-tv.php" class="btn btn-primary">Ir a catálogo &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/principal/celulares.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Teléfonos celulares</h2>
            <p>No te quedes sin llamar a la persona que quieres, contáctala en el momento que quieras con uno de los celulares más modernos que tenemos.</p>
            <a href="4index-catalogo-cel.php" class="btn btn-primary">Ir a catálogo &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/principal/consolas.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Consolas de videojuegos</h2>
            <p>Pasa un momento con los niños del hogar, el mejor precio en consolas para la mejor diversión.</p>
            <a href="4index-catalogo-consolas.php" class="btn btn-primary">Ir a catálogo &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
