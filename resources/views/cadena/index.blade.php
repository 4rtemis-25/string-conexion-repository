@extends('layouts.plantillaGeneral')

@section('titulo')
Cadenas formativas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="padding: 20px;">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                {{ __('Cadenas de Formación SENA CTMA:') }}
                            </h4>

                            <div class="float-right">
                                <a href="{{ route('cadenas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva cadena') }}
                                </a>
                            </div>

                            <!--INICIO DEL MODAL CON EL FORMULARIO DE CREAR-->
                            <!--FIN DEL MODAL CON EL FORMULARIO DE CREAR-->
                        </div>
                    </div>

                    <div class="card-body">
                        <!--INICIO DE LA FILA DE LAS SUBTARJETAS QUE VAN A HACER EL FOREACH-->
                        <div class="row">
                            @foreach ($cadenas as $cadena)
                            <div class="col-md-4">
                                <div class="card mt-4">
                                    <div class="card-header mx-4 p-3 text-center">
                                        <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                            @if ($cadena->nombre_cadena == "Tics y Electrónica")
                                                <i class="fa fa-laptop opacity-10"></i>
                                            @elseif ($cadena->nombre_cadena == "Automotriz y Transportes")
                                                <i class="fa fa-car opacity-10"></i>
                                            @elseif ($cadena->nombre_cadena == "Electricidad")
                                                <i class="fa fa-bolt opacity-10"></i>
                                            @elseif ($cadena->nombre_cadena == "Sistemas de Manufactura")
                                                <i class="fa fa-hands opacity-10"></i>
                                            @elseif ($cadena->nombre_cadena == "Automatización")
                                                <i class="fa fa-robot opacity-10"></i>
                                            @elseif ($cadena->nombre_cadena == "Formación Virtual")
                                                <i class="fa fa-wifi opacity-10"></i>
                                            @else
                                                <i class="fa fa-arrow-up opacity-10"></i>   
                                            @endif
                                        </div>
                                        
                                        <div class="card-body pt-0 p-3 text-center">
                                            <h6 class="text-center mb-0 mt-4">{{ $cadena->nombre_cadena }}</h6>
                                            <span class="text-xs">Sede Pedregal</span>
                                            <hr class="horizontal dark my-3">
                                            <center>
                                                <form action="{{ route('cadenas.destroy',$cadena->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('cadenas.edit',$cadena->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                                </form>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--FIN DE LA FILA DE LAS SUBTARJETAS QUE VAN A HACER EL FOREACH-->
                    </div>
                </div>
                {!! $cadenas->links() !!}
            </div>
        </div>

        
    </div>
@endsection
