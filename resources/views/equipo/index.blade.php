@extends('layouts.plantillaGeneral')

@section('titulo')
Equipos y servicios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="padding: 20px;">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                {{ __('Equipo') }}
                            </h4>

                             <div class="float-right">
                                <a href="{{ route('equipos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Integrantes</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10 ps-2">Equipo y servicio</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Disponibilidad</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Correo de contacto</th>
                                                    <th class="text-secondary opacity-7"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($equipos as $equipo)
                                                    <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                        <!-- <div>
                                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                        </div> -->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $equipo->nombre_integrante1 }} (L)</h6>
                                                            <p class="text-xs text-secondary mb-0">
                                                                {{ $equipo->nombre_integrante2 }},
                                                                <br>
                                                                {{ $equipo->nombre_integrante3 }}
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0 text-sm">{{ $equipo->nombre_equipo }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $equipo->servicios_ofrecidos }}</p>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        @if($equipo->diponibilidad == 0)
                                                        <span class="badge badge-sm bg-gradient-danger">
                                                            <i class="fa fa-minus opacity-10"></i>
                                                        </span>
                                                        @elseif($equipo->diponibilidad == 1)
                                                        <span class="badge badge-sm bg-gradient-success">
                                                            <i class="fa fa-check opacity-10"></i>
                                                        </span>
                                                        @endif
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-xs font-weight-bold">{{ $equipo->user->email }}</span>
                                                    </td>
                                                    <td class="align-middle">
                                                        <form action="{{ route('equipos.destroy',$equipo->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-success" href="{{ route('equipos.edit',$equipo->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                            <br>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                                        </form>
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $equipos->links() !!}
            </div>
        </div>
    </div>
@endsection
