<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::text('nombre_cadena', $cadena->nombre_cadena, ['class' => 'form-control' . ($errors->has('nombre_cadena') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cadena']) }}
            {!! $errors->first('nombre_cadena', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">¡Hecho!</button>
    </div>
</div>