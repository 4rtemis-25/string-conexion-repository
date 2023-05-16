@extends('layouts.app')

@section('template_title')
    {{ $aprendice->name ?? 'Show Aprendice' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Aprendice</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aprendices.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Foto Perfil:</strong>
                            {{ $aprendice->foto_perfil }}
                        </div>
                        <div class="form-group">
                            <strong>Habilidades:</strong>
                            {{ $aprendice->habilidades }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $aprendice->tipo_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Documento:</strong>
                            {{ $aprendice->numero_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefono:</strong>
                            {{ $aprendice->numero_telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $aprendice->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Cadena Id:</strong>
                            {{ $aprendice->cadena_id }}
                        </div>
                        <div class="form-group">
                            <strong>Programa Id:</strong>
                            {{ $aprendice->programa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $aprendice->usuario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
