@extends('layouts.plantillaGeneral')

@section('titulo')
Equipos / editar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body style="padding: 50px;">
                        <h4>Edita tu equipo de trabajo:</h4>
                        <br>
                        <form method="POST" action="{{ route('equipos.update', $equipo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('equipo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
