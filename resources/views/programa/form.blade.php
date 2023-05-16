<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::text('nombre_programa', $programa->nombre_programa, ['class' => 'form-control' . ($errors->has('nombre_programa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Programa']) }}
            {!! $errors->first('nombre_programa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::text('ficha_programa', $programa->ficha_programa, ['class' => 'form-control' . ($errors->has('ficha_programa') ? ' is-invalid' : ''), 'placeholder' => 'Ficha Programa']) }}
            {!! $errors->first('ficha_programa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::select('cadena_id', $cadenas, $programa->cadena_id, ['class' => 'form-control' . ($errors->has('cadena_id') ? ' is-invalid' : ''), 'placeholder' => 'Cadena Id']) }}
            {!! $errors->first('cadena_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">¡Hecho!</button>
    </div>
</div>