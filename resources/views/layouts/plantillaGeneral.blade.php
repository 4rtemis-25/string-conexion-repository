<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logoSena.png"> -->
  <link rel="icon" type="image/png" href="../assets/img/logoSenaActual.png">
  <title>
    String Conexion
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <!-- <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" /> -->
  @vite(['resources/css/argon-dashboard.css'])
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>


  <!--INICIO DEL SIDE BAR (BARRA DE NAVEGACION LATERAL)-->
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">

    <!--INCIO DE LA CABECERA QUE CONTENDRA EL LOGO-->
    <div class="sidenav-header">
      <!-- <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i> -->
      <a class="navbar-brand m-0" href="home">
        <img src="../assets/img/logoSenaActual.png" class="navbar-brand-img h-100">
        <span class="ms-1 font-weight-bold">String Conexion</span>
      </a>
    </div>
    <!--INCIO DE LA CABECERA QUE CONTENDRA EL LOGO-->


    <hr class="horizontal dark mt-0">

    <!--INICIO DE LOS ITEMS DEL MENU LATERAL-->
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <!--INICIO ITEM 1-->
        <li class="nav-item">
          <a class="nav-link" href="home">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home text-primary text-sm opacity-10""></i>
            </div>
            <span class="nav-link-text ms-1">Inicio</span>
          </a>
        </li>
        <!--FIN ITEM 1-->

        <!--INICIO ITEM 2-->
        <li class="nav-item">
          <a class="nav-link " href="{{ route('cadenas.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-cogs text-primary text-sm opacity-10" ></i>
            </div>
            <span class="nav-link-text ms-1">Cadenas Formativas</span>
          </a>
        </li>
        <!--FIN ITEM 2-->

        <!--INICIO ITEM 3-->
        <li class="nav-item">
          <a class="nav-link " href="{{ route('programas.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-book text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Programas Formativos</span>
          </a>
        </li>
        <!--FIN ITEM 3-->

        <!--INICIO ITEM 4-->
        <li class="nav-item">
          <a class="nav-link " href="{{ route('equipos.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Equipos de Trabajo</span>
          </a>
        </li>
        <!--FIN ITEM 4-->

        <!--INICIO ITEM 5-->
        <li class="nav-item">
          <a class="nav-link " href="{{ route('proyectos.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-american-sign-language-interpreting text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Proyectos String</span>
          </a>
        </li>
        <!--FIN ITEM 5-->

        <!--INICIO ITEM 6-->
        <li class="nav-item">
          <a class="nav-link " href="/chatify">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-comments text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Chat Interactivo</span>
          </a>
        </li>
        <!--FIN ITEM 6-->

        <!--INICIO ITEM 7-->
        <li class="nav-item">
          <a class="nav-link " href="/forum">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-question text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Foro de Preguntas</span>
          </a>
        </li>
        <!--FIN ITEM 7-->

        <!--INICIO ITEM 7-->
            <!-- <li class="nav-item">
              <a class="nav-link " href="pages/rtl.html">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-search text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Investiga con ChatGpt</span>
              </a>
            </li> -->
        <!--FIN ITEM 7-->

        <!--INICIO APARTADO DE LOS DATOS PERSONALES-->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Tu Cuenta String</h6>
        </li>
        <!--FIN APARTADO DE LOS DATOS PERSONALES-->

        <!--INICIO LINK AL PERFIL-->
        <li class="nav-item">
          <a class="nav-link " href="{{ route('aprendices.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Perfil de Usuario</span>
          </a>
        </li>
        <!--FIN LINK AL PERFIL-->

        <!--INICIO LINK DE LA HOJA DE VIDA-->
        <!-- <li class="nav-item">
          <a class="nav-link " href="pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-address-book text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Portafolio del Aprendiz</span>
          </a>
        </li> -->
        <!--FIN LINK DE LA HOJA DE VIDA-->

      </ul>
    </div>
    <!--INICIO DE LOS ITEMS DEL MENU LATERAL-->

    <br>

    <!--INCIO DEL DEL MENU LATERAL-->
    <div class="sidenav-footer mx-3 ">

      <!--INICIO DE LA CARTA CON EL MENSAJE-->
      <div class="card card-plain shadow-none" id="sidenavCard">
        <!--ESTE ES ESPACIO PARA COLOCAR LA IMAGEN (OPCIONAL)-->
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">¿Necesitas Ayuda?</h6>
            <p class="text-xs font-weight-bold mb-0">Mira estos Enlaces</p>
          </div>
        </div>
      </div>
      <!--FIN DE LA CARTA CON EL MENSAJE-->

      <!--INICIO DE LOS BOTONES DEL PIE DEL MENU-->
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Reportar Problemas</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Apoyar el Proyecto</a>
      <!--FIN DE LOS BOTONES DEL PIE DEL MENU-->

    </div>
    <!--FIN DEL DEL MENU LATERAL-->
  </aside>
  <!--FIN DEL SIDE BAR (BARRA DE NAVEGACION LATERAL)-->

  <!--INICIO DEL CONTENIDO PRINCIPAL DE LA PAGINA (AQUI ES DONDE VA A ESTAR TODO LO MODIFICABLE)-->
  <main class="main-content position-relative border-radius-lg">
    <!--INICIO DE LA CABECERA-->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">

        <!--INICIO DE LA PAGINACION-->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pagina</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">@yield('titulo')</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Pagina de @yield('titulo')</h6>
          
        </nav>
        <!--FIN DE LA PAGINACION-->

        <!--INICIO DE LOS ENLACES DE LA CABECERA-->
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

          <!--INICIO DE LA BARRA DE BSUQUEDA -->
          <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Busca Algo">
            </div> -->
          </div>
          <!--FIN DE LA BARRA DE BSUQUEDA -->

          <!--INICIO DE LA BARRA DE  NOTIFICACION-->
          <ul class="navbar-nav  justify-content-end">
            <!--INICIO DE LA ESTRUCTURA DE NOTIFICACION-->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
              <div class="dropdown">
                <ul>
                  <!-- Authentication Links -->
                  @guest
                    @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                    @endif

                    @if (Route::has('register'))
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                    @endif
                    @else
                      <li class="nav-item dropdown">
                        <a id="navbarDropdown" style="color:white;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                          </form>
                        </div>
                      </li>
                  @endguest
                </ul>
              </div>
            </li>
            <!--FIN DE LA ESTRUCTURA DE NOTIFICACION-->
          </ul>
          <!--FIN DE LA BARRA DE  NOTIFICACION-->
        </div>
        <!--FIN DE LOS ENLACES DE LA CABECERA-->
      </div>
    </nav>
    <!--FIN DE LA CABECERA-->

    <!--INICIO DEL CONTENEDOR PRINCIPAL DE LA PAGINA-->
    @yield('content')

    <!--INICIO DEL FOOTER-->
    <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Hecho para el
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Sena</a>
                para una educación moderna.
                <i class="fa fa-heart"></i>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Desarrolladores</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">Licencia</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <!--FIN DEL FOOTER-->
  </main>
  <!--FIN DEL CONTENIDO PRINCIPAL DE LA PAGINA (AQUI ES DONDE VA A ESTAR TODO LO MODIFICABLE)-->

  <!--INICIO DEL BOTON FIJADO DE CONFIGURACION-->
  <div class="fixed-plugin">

    <!--INICIO DEL ESTILO DLE BOTON-->
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <!--FIN DEL ESTILO DLE BOTON-->

    <!--INICIO DE LA CARTA DE LA CONFIGURACION DE ESTILOS-->
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configuación String</h5>
          <p>Personaliza tu experiencia en esta plataforma.</p>
        </div>
        <!-- End Toggle Button -->
      </div>
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!--INICIO DEL MODO OSCURO Y CLARO GENERAL DE LA PAGINA-->
        <hr class="horizontal dark my-sm-4">
        <div class="mb-5 d-flex">
          <h6 class="mb-0">Claro / Oscuro</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <!--FIN DEL MODO OSCURO Y CLARO GENERAL DE LA PAGINA-->
      </div>
    </div>
    <!--FIN DE LA CARTA DE LA CONFIGURACION DE ESTILOS-->
  </div>
  <!--FIN DEL BOTON FIJADO DE CONFIGURACION-->

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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