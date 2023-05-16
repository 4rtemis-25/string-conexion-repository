<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/logoSenaActual.png">
  <title>
    Inicio Sesión
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
  <!--INICIO CONTENEDOR DE LA BARRA DE NAVEGACION-->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!--INICIO DE LA BARRA DE NAVEGACION-->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <!--INICIO TEXTO LADO IZQUIERDO-->
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
              STRING-CONEXION
            </a>
            <!--FIN TEXTO LADO IZQUIERDO-->

            <!--INICIO CONTENEDOR DE LOS ITEMS DE LA BARRA DE NAVEGACION-->
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <!--INICIO DE LOS ENLACES A LAS PLATAFORMAS SENA-->
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="https://oferta.senasofiaplus.edu.co/sofia-oferta/">
                    <i class="fa fa-users opacity-6 text-dark me-1"></i>
                    Sofia-plus
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://sena.territorio.la/init.php">
                    <i class="fa fa-map-marker opacity-6 text-dark me-1"></i>
                    Territorium
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="http://sigti.senactma.com/index.php">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    SIGTI
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://caprendizaje.sena.edu.co/sgva/SGVA_Diseno/pag/login.aspx">
                    <i class="fa fa-briefcase opacity-6 text-dark me-1"></i>
                    SVGA
                  </a>
                </li>
                <!--FIN DE LOS ENLACES A LAS PLATAFORMAS SENA-->
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="{{ route('register') }}" class="btn btn-sm mb-0 me-1 btn-primary">Registrate Aquí !</a>
                </li>
              </ul>
            </div>
            <!--FIN CONTENEDOR DE LOS ITEMS DE LA BARRA DE NAVEGACION-->
          </div>
        </nav>
        <!--FIN DE LA BARRA DE NAVEGACION-->
      </div>
    </div>
  </div>
  <!--FIN CONTENEDOR DE LA BARRA DE NAVEGACION-->

  <!--INICIO DEL CONTENIDO PRINCIPAL DE LA PAGINA-->
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">

        <!--INICIO CONTENDOR CENTRAL DE LA PAGINA-->
        <div class="container">
          <div class="row">
            <!--INICIO CONTENIDO DE LAZO IZQUIERDO-->
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Ingresar</h4>
                  <p class="mb-0">Ingresa tu correo Soy-Sena y tu contraseña para acceder</p>
                </div>
                <div class="card-body">
                  <!--INICIO DEL FORMULARIO DE LOS DATOS-->
                    @yield('content')
                  <!--FIN DEL FORMULARIO DE LOS DATOS-->
                </div>

                <!--INICIO DEL MENSAJE ALERT-->
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    <!--AQUI SERIA BUENO COLOCAR LA ALERTA DE LA PAGINA EN CASO DE LLENAR MAL LOS DATOS-->
                  </p>
                </div>
                <!--FIN DEL MENSAJE ALERT-->
              </div>
            </div>
            <!--FIN CONTENIDO DE LAZO IZQUIERDO-->

            <!--INICIO CONTENIDO DEL LADO DERECHO-->
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url(assets/img/imagenInstitucion.jpg);
                background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <!-- <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p> -->
              </div>
            </div>
            <!--FIN CONTENIDO DEL LADO DERECHO-->
          </div>
        </div>
        <!--FIN CONTENDOR CENTRAL DE LA PAGINA-->
      </div>
    </section>
  </main>
  <!--FIN DEL CONTENIDO PRINCIPAL DE LA PAGINA-->

  <!--   Core JS Files   -->
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