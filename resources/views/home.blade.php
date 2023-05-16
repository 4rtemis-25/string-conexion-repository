@extends('layouts.plantillaGeneral')

@section('titulo')
Inicio
@endsection

@section('content')
<!--INICIO DEL CONTENEDOR PRONCIPAL DE LA PAGINA -->
<div class="container-fluid py-4">
<div class="row mt-4">
      <!--INICIO DE LA COLUMA QUE MOSTRARA EL TEXTO DE STRING CONEXION-->
      <div class="col-lg-12 mb-lg-0 mb-4">
        <!--INICIO DE L TARJETA QUE VA A MOSTRAR LA INFORMACION DE STRING CONEXION-->
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h4 style="margin: 15px;">¿Qué es String Conexion?</h4>
          </div>

          <div class="card-body p-3">
            <!--INICIO DE LA DEFINICION DE LA FILA LARA MOSTRAR INFORMACION EN LA TARJETA-->
            <div class="row mt-4">
              <!--INICIO DE LA COLUMNA QUE VA A TENER LA INFORMACION TEXTUAL-->
              <div class="col-lg-8 mb-lg-0 mb-4">
                <p style="margin: 15px; margin-top: -20px;">
                  En el SENA los estudiantes que pertenecen a las diferentes cadenas de los centros de formación presentan grandes limitaciones al momento de elaborar un proyecto final, que tenga el propósito de ser funcional y rentable, debido a que únicamente recurren a sus bases adquiridas en sus respectivos programas (nivel técnico y/o tecnológico), que pueden complementarse con otros, de las cuales el SENA imparte formación.
                </p>
                <p style="margin: 15px;">
                  String Conexion surge como una solución para formar lazos entre aprendices de diferentes trimestres y programas, para que potencien nuevos proyectos e intercambien información en forma colaborativa, por medio de una plataforma web que conecta todas las cadenas y programas de formación, proporcionando un chat en tiempo real y un foro de preguntas.
                </p>
              </div>
              <div class="col-lg-4 mb-lg-0 mb-4">
                <div>
                  <center>
                  <img src="assets/img/logoSenaActual.png" alt="" style="width: 250px; margin-top: -30px;">
                  </center>
                </div>
              </div>
              <!--FIN DE LA COLUMNA QUE VA A TENER LA INFORMACION TEXTUAL-->
            </div>
            <!--FIN DE LA DEFINICION DE LA FILA LARA MOSTRAR INFORMACION EN LA TARJETA-->
          </div>
        </div>
        <!--FIN DE L TARJETA QUE VA A MOSTRAR LA INFORMACION DE STRING CONEXION-->
      </div>
      <!--FIN DE LA COLUMA QUE MOSTRARA EL TEXTO DE STRING CONEXION-->
    </div>

    <div class="row mt-4">
        <!--INICIO DE LA TARJETA QUE DARA INFORMACION SOBRE EL SENA CTMA-->
        <div class="col-lg-7 mb-lg-0 mb-4">
            <!--INICIO DE LA ESTRUCTURA DE LA CARTA DE INFORMACION-->
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h4 style="margin: 15px;">SENA CTMA (Historia).</h4>
                </div>
                <div class="card-body p-3">
                    <p style="margin: 15px;">
                        En 1960, se inició el Centro de Aprendizaje de Artes Metalmecánicas, inaugurándose el 26 de agosto de 1961, con la asistencia del presidente de Colombia, Alberto Lleras Camargo.
                    </p>
                    <p style="margin: 15px;">
                        Iniciaron especializaciones de máquinas y herramientas, ebanistería, electricidad instalador, mantenimiento mecánico, soldadura de soplete y reparador de automotores. 
                    </p>
                    <p style="margin: 15px;">
                        Posteriormente, recibió el nombre de Centro Metalmecánico y en 2007, se le asigno el actual, Centro de la Tecnología de la Manufactura Avanzada.
                    </p>
                </div>
            </div>
            <!--FIN DE LA ESTRUCTURA DE LA CARTA DE INFORMACION-->
        </div>
        <!--FIN DE LA TARJETA QUE DARA INFORMACION SOBRE EL SENA CTMA-->

        <!--INICIO DEL CARRUSEL DE IMAGENES-->
        <div class="col-lg-5">
          <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
              <div class="carousel-inner border-radius-lg h-100">
                <!--INICIO PRIMER IMAGEN DEL CARRUSEL-->
                <div class="carousel-item h-100 active" style="background-image: url('./assets/img/institucion/bibliotecaPedregal.jpg');
                    background-size: cover;">
                  <span class="mask bg-gradient-dark opacity-6"></span>
                  <!--INICIO DEL TEXTO DE LA IMAGEN DEL CARRUSEL-->
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">

                    <!--INICIO DEL ICONO DEL TEXTO-->
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <!--FIN DEL ICONO DEL TEXTO-->

                    <h5 class="text-white mb-1">SENA CTMA</h5>
                    <p>Biblioteca complejo norte.</p>
                  </div>
                  <!--FIN DEL TEXTO DE LA IMAGEN DEL CARRUSEL-->    
                </div>
                <!--FIN PRIMER IMAGEN DEL CARRUSEL-->

                <!--INICIO SEGUNDA IMAGEN DEL CARRUSEL-->
                <div class="carousel-item h-100 active" style="background-image: url('./assets/img/institucion/centroDesarrolloHabitat.jpg');
                    background-size: cover;">
                  <span class="mask bg-gradient-dark opacity-6"></span>
                  <!--INICIO DEL TEXTO DE LA IMAGEN DEL CARRUSEL-->
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">

                    <!--INICIO DEL ICONO DEL TEXTO-->
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <!--FIN DEL ICONO DEL TEXTO-->

                    <h5 class="text-white mb-1">SENA CTMA</h5>
                    <p>Centro para el Desarrollo del Hábitat y la Construcción.</p>
                  </div>
                  <!--FIN DEL TEXTO DE LA IMAGEN DEL CARRUSEL-->    
                </div>
                <!--FIN SEGUNDA IMAGEN DEL CARRUSEL-->

                <!--INICIO TERCERA IMAGEN DEL CARRUSEL-->
                <div class="carousel-item h-100 active" style="background-image: url('assets/img/institucion/vistaDesdeArriba.jpg');
                    background-size: cover;">
                  <span class="mask bg-gradient-dark opacity-6"></span>
                  <!--INICIO DEL TEXTO DE LA IMAGEN DEL CARRUSEL-->
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">

                    <!--INICIO DEL ICONO DEL TEXTO-->
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <!--FIN DEL ICONO DEL TEXTO-->

                    <h5 class="text-white mb-1">SENA CTMA</h5>
                    <p>SENA Pedregal visto desde arriba.</p>
                  </div>
                  <!--FIN DEL TEXTO DE LA IMAGEN DEL CARRUSEL-->    
                </div>
                <!--FIN TERCERA IMAGEN DEL CARRUSEL-->
              </div>

              <!--INICIO DE LOS BOTONES DEL CARRUSEL-->
              <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              <!--FIN DE LOS BOTONES DEL CARRUSEL-->
            </div>
          </div>
        </div>
        <!--FIN DEL CARRUSEL DE IMAGENES-->
    </div>

    <div  class="row mt-4">
      <!--INICIO DE LA SECCION VISION DEL SENA CTMA-->
      <div class="col-xl-5 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-10">
                  <!--INICIO DE LA SECCION DLE TITULO DE LA CARTA-->
                  <div class="numbers">
                    <h5 class="font-weight-bolder" style="margin: 15px;">Visión</h5>
                    <p class="mb-0" style="margin: 15px;">
                      En el año 2022 el SENA se consolidara como una entidad referente a la formación integral para el trabajo, por su aporte a la empleabilidad, el emprendimiento y la equidad, que atiende con pertenencia y calidad las necesidades productivas y sociales del país.
                    </p>
                  </div>
                  <!--FIN DE LA SECCION DLE TITULO DE LA CARTA-->
                </div>

                <!--INICIO DE LA SECCION DEL ICONO DE LA TARJETA-->
                <div class="col-2 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="fa fa-eye text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <!--FIN DE LA SECCION DEL ICONO DE LA TARJETA-->
              </div>
            </div>
          </div>
      </div>
      <!--FIN DE LA SECCION VISION DEL SENA CTMA-->

      <!--INICIO DE LA SECCION MISION DEL SENA CTMA-->
      <div class="col-xl-7 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-9">
                  <!--INICIO DE LA SECCION DLE TITULO DE LA CARTA-->
                  <div class="numbers">
                    <h5 class="font-weight-bolder" style="margin: 15px;">Misión</h5>
                    <p class="mb-0" style="margin: 15px;">
                      El Sena está encargado de cumplir la función que le corresponde al estado de invertir en el desarrollo social y técnico de los trabajadores colombianos, ofreciendo y ejecutando la formación profesional integral, para la incorporación y el desarrollo de las personas en actividades productivas que contribuyan al desarrollo social, económico y tecnológico del país (Ley 119/1994).
                    </p>
                  </div>
                  <!--FIN DE LA SECCION DLE TITULO DE LA CARTA-->
                </div>

                <!--INICIO DE LA SECCION DEL ICONO DE LA TARJETA-->
                <div class="col-3 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="fa fa-briefcase text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <!--FIN DE LA SECCION DEL ICONO DE LA TARJETA-->
              </div>
            </div>
          </div>
      </div>
      <!--FIN DE LA SECCION MISION DEL SENA CTMA-->
    </div>
</div>
<!--FIN DEL CONTENEDOR PRONCIPAL DE LA PAGINA -->
@endsection
