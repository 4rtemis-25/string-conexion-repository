@extends('layouts.plantillaGeneral')

@section('titulo')
Perfil usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <center>
                <div class="col-sm-12">
                    <br><br><br>
                    <div class="card card-profile">
                        <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="../assets/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white" style="width: 200px;">
                            </a>
                            </div>
                        </div>
                        </div>
                        <div class="card-body pt-0">
                            @foreach ($aprendices as $aprendice)
                            <div class="text-center mt-4 mb-4">
                                <h5>
                                {{ $aprendice->user->name }}
                                </h5>
                                <div class="font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ $aprendice->cadena->nombre_cadena }}:
                                <br>
                                 {{ $aprendice->programa->nombre_programa }}
                                </div>
                                <div class="h6 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{ $aprendice->habilidades }}
                                </div>
                                <br>
                                <form action="{{ route('aprendices.destroy',$aprendice->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary" href="{{ route('aprendices.edit',$aprendice->id) }}"><i class="fa fa-fw fa-edit"></i>Editar perfil de usuario</a>
                                    @csrf
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
@endsection
