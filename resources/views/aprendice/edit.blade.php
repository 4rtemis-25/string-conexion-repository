@extends('layouts.plantillaGeneral')

@section('titulo')
Aprendiz / editar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="padding: 50px;">
                    <h4>Crea un aprendiz:</h4>
                    <br>
                    <div class="card-body">
                        <form method="POST" action="{{ route('aprendices.update', $aprendice->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('aprendice.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
