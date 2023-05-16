<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::text('nombre_proyecto', $proyecto->nombre_proyecto, ['class' => 'form-control' . ($errors->has('nombre_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Proyecto']) }}
            {!! $errors->first('nombre_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::text('descripcion', $proyecto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::text('imagen_proyecto', $proyecto->imagen_proyecto, ['class' => 'form-control' . ($errors->has('imagen_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Imagen Proyecto']) }}
            {!! $errors->first('imagen_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::text('nombre_equipo1', $proyecto->nombre_equipo1, ['class' => 'form-control' . ($errors->has('nombre_equipo1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Equipo1']) }}
            {!! $errors->first('nombre_equipo1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::select('nombre_equipo_creador', $equipos, $proyecto->nombre_equipo_creador, ['class' => 'form-control' . ($errors->has('nombre_equipo_creador') ? ' is-invalid' : ''), 'placeholder' => 'Nombre equipo líder']) }}
            {!! $errors->first('nombre_equipo_creador', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">¡Hecho!</button>
    </div>
</div>