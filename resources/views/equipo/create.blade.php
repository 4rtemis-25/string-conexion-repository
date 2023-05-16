@extends('layouts.plantillaGeneral')

@section('titulo')
Equipos / crear
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="padding: 50px;">
                    <div class="card-body">
                        <h4>Crea un nuevo equipo de trabajo:</h4>
                        <br>
                        <form method="POST" action="{{ route('equipos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('equipo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
