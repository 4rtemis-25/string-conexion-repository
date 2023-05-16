<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('foto_perfil') }}
            {{ Form::text('foto_perfil', $aprendice->foto_perfil, ['class' => 'form-control' . ($errors->has('foto_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Foto Perfil']) }}
            {!! $errors->first('foto_perfil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habilidades') }}
            {{ Form::text('habilidades', $aprendice->habilidades, ['class' => 'form-control' . ($errors->has('habilidades') ? ' is-invalid' : ''), 'placeholder' => 'Habilidades']) }}
            {!! $errors->first('habilidades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_documento') }}
            {{ Form::text('tipo_documento', $aprendice->tipo_documento, ['class' => 'form-control' . ($errors->has('tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Documento']) }}
            {!! $errors->first('tipo_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_documento') }}
            {{ Form::text('numero_documento', $aprendice->numero_documento, ['class' => 'form-control' . ($errors->has('numero_documento') ? ' is-invalid' : ''), 'placeholder' => 'Numero Documento']) }}
            {!! $errors->first('numero_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_telefono') }}
            {{ Form::text('numero_telefono', $aprendice->numero_telefono, ['class' => 'form-control' . ($errors->has('numero_telefono') ? ' is-invalid' : ''), 'placeholder' => 'Numero Telefono']) }}
            {!! $errors->first('numero_telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $aprendice->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cadena_id') }}
            {{ Form::select('cadena_id', $cadenas, $aprendice->cadena_id, ['class' => 'form-control' . ($errors->has('cadena_id') ? ' is-invalid' : ''), 'placeholder' => 'Cadena Id']) }}
            {!! $errors->first('cadena_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programa_id') }}
            {{ Form::select('programa_id', $programas, $aprendice->programa_id, ['class' => 'form-control' . ($errors->has('programa_id') ? ' is-invalid' : ''), 'placeholder' => 'Programa Id']) }}
            {!! $errors->first('programa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::select('usuario_id', $usuarios, $aprendice->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">¡Hecho!</button>
    </div>
</div>