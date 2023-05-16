<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/logoSenaActual.png">
  <title>
    Formulario Registro
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <!--INICIO DE LA BARRA DE NAVEGACION-->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <!--INCIIO CONTENEDOR DE LOS ITEMS DE LA BARRA DE NAVEGACION-->
    <br><br><br><br>
    <div class="container">
      <!--INICIO DE LOS LINKS A LAS PAGINAS DEL SENA-->
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto">
          <!--INICIO DE LOS ENLACES A LAS PLATAFORMAS SENA-->
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="https://oferta.senasofiaplus.edu.co/sofia-oferta/">
              <i class="fa fa-users opacity-100 text-white me-1"></i>
              Sofia-plus
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="https://sena.territorio.la/init.php">
              <i class="fa fa-map-marker opacity-100 text-white me-1"></i>
              Territorium
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="http://sigti.senactma.com/index.php">
              <i class="fas fa-user-circle opacity-100 text-white me-1"></i>
              SIGTI
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="https://caprendizaje.sena.edu.co/sgva/SGVA_Diseno/pag/login.aspx">
              <i class="fa fa-briefcase opacity-100 text-white me-1"></i>
              SVGA
            </a>
          </li>
          <!--FIN DE LOS ENLACES A LAS PLATAFORMAS SENA-->
        </ul>
      </div>
      <!--FIN DE LOS LINKS A LAS PAGINAS DEL SENA-->
    </div>
    <!--FIN CONTENEDOR DE LOS ITEMS DE LA BARRA DE NAVEGACION-->
  </nav>
  <!--FIN DE LA BARRA DE NAVEGACION-->

  <!--INICIO DEL CONTENDIO PRINCIPAL DE LA PAGINA-->
  <main class="main-content  mt-0">
    <!--INICIO DE LA PARTE SUSPERIOR DEL CODIGO-->
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url(assets/img/imagenInstitucion.jpg); background-position: cover;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">STRING-CONEXION</h1>
          </div>
        </div> 
      </div>
    </div>
    <!--FIN DE LA PARTE SUSPERIOR DEL CODIGO-->

    <!--INICIO CONETENDOR DEL FORMULARIO-->
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>¡Registrate Ahora!</h5>
            </div>
            
            <div class="card-body">
              <!--INICIO DEL FORMULARIO DE REGISTRO-->
              @yield('content')
              <!--FIN DEL FORMULARIO DE REGISTRO-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--FIN CONETENDOR DEL FORMULARIO-->
  </main>
  <!--FIN DEL CONTENDIO PRINCIPAL DE LA PAGINA-->

  <!--INICIO DEL PIE DE PAGINA-->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Sena Pedregal.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--FIN DEL PIE DE PAGINA-->}

  <!--   INCIO ARCHIVOS JS   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>