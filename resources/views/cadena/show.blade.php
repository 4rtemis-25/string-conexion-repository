@extends('layouts.app')

@section('template_title')
    {{ $cadena->name ?? 'Show Cadena' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cadena</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cadenas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Cadena:</strong>
                            {{ $cadena->nombre_cadena }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
