@extends('layouts.plantillaGeneral')

@section('titulo')
Perfil / crear
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body" style="padding: 50px;">
                        <h4>Crea un aprendiz:</h4>
                        <br>
                        <form method="POST" action="{{ route('aprendices.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('aprendice.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
