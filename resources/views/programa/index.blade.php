@extends('layouts.plantillaGeneral')

@section('titulo')
Programas formativos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="padding: 20px;">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <h4 id="card_title">
                                    {{ __('Programas Formativos CTMA:') }}
                                </h4>

                                <div class="float-right">
                                    <a href="{{ route('programas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear nuevo') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" style="margin-top: -30px; margin-bottom: 30px;">
                            <!--INICIO DE LA ESTRUCTURA DE LA INFORMACION-->
                            <div class="row">
                                @foreach ($programas as $programa)
                                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                                    <div class="card mt-4">
                                        <div class="card-body p-3 text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="numbers">
                                                        <h6 class="font-weight-bolder">{{ $programa->nombre_programa }}</h6>
                                                        <p class="mb-0">
                                                        <span class="text-success text-sm font-weight-bolder">Ficha:</span>
                                                        {{ $programa->ficha_programa }}
                                                        </p>
                                                        <p class="mb-0">
                                                        <span class="text-primary text-sm font-weight-bolder">Cadena:</span>
                                                        {{ $programa->cadena->nombre_cadena }}
                                                        </p>
                                                        <br>
                                                        <form action="{{ route('programas.destroy',$programa->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-success" href="{{ route('programas.edit',$programa->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!--FIN DE LA ESTRUCTURA DE LA INFORMACION-->
                        </div>
                    </div>
                    {!! $programas->links() !!}
            </div>
        </div>
    </div>
@endsection
