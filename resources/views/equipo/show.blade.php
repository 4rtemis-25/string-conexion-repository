@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? 'Show Equipo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Equipo:</strong>
                            {{ $equipo->nombre_equipo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Integrante1:</strong>
                            {{ $equipo->nombre_integrante1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Integrante2:</strong>
                            {{ $equipo->nombre_integrante2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Integrante3:</strong>
                            {{ $equipo->nombre_integrante3 }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios Ofrecidos:</strong>
                            {{ $equipo->servicios_ofrecidos }}
                        </div>
                        <div class="form-group">
                            <strong>Diponibilidad:</strong>
                            {{ $equipo->diponibilidad }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Usuario Creador:</strong>
                            {{ $equipo->correo_usuario_creador }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
