@extends('layouts.app')

@section('template_title')
    {{ $programa->name ?? 'Show Programa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Programa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('programas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Programa:</strong>
                            {{ $programa->nombre_programa }}
                        </div>
                        <div class="form-group">
                            <strong>Ficha Programa:</strong>
                            {{ $programa->ficha_programa }}
                        </div>
                        <div class="form-group">
                            <strong>Cadena Id:</strong>
                            {{ $programa->cadena_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
