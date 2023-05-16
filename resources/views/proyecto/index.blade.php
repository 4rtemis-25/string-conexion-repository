@extends('layouts.plantillaGeneral')

@section('titulo')
Proyectos productivos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="padding: 20px;">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                {{ __('Proyectos SENA CTMA:') }}
                            </h4>

                             <div class="float-right">
                                <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($proyectos as $proyecto)
                            <div class="col-md-4">
                                <!--INICIO DE LA TARJETA DE LOS PROYECTOS-->
                                <div class="card mt-4">
                                    <img src="http://www.paginaswebs.com/wp-content/uploads/2017/01/diseno-de-paginas-web-creadoresweb.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $proyecto->nombre_proyecto }}</h5>
                                        <p class="card-text">{{ $proyecto->descripcion }}.</p>
                                        <!--INICIO DE LA SECCION DE EQUIPOS -->
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Equipos encargados:</h6>
                                            <p class="text-xs text-secondary mb-0">
                                                * {{ $proyecto->equipo->nombre_equipo }} <span class="text-success">(Líder)</span>
                                                <br>
                                                * {{ $proyecto->nombre_equipo1 }}
                                            </p>
                                        </div>
                                        <br>
                                        <center>
                                            <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                                <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                            </form>
                                        </center>
                                        <!--FIN DE LA SECCION DE EQUIPOS -->
                                    </div>
                                </div>
                                <!--FIN DE LA TARJETA DE LOS PROYECTOS-->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {!! $proyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
