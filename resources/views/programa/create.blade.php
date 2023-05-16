@extends('layouts.plantillaGeneral')

@section('titulo')
Aprendiz / crear
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body" style="padding: 50px;">
                        <h4>Crea un nuevo programa de formación:</h4>
                        <br>
                        <form method="POST" action="{{ route('programas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('programa.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
