@component('forum::modal-form')
    @slot('key', 'create-category')
    @slot('title', trans('forum::categories.create'))
    @slot('route', Forum::route('category.store'))

    <div class="mb-3">
        <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Título del hilo">
    </div>
    <div class="mb-3">
        <input type="text" name="description" value="{{ old('description') }}" class="form-control" placeholder="¿De qué tratará el hilo?">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="accepts_threads" id="accepts-threads" value="1" {{ old('accepts_threads') ? 'checked' : '' }}>
            <label class="form-check-label" for="accepts-threads">Habilitar comentarios</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_private" id="is-private" value="1" {{ old('is_private') ? 'checked' : '' }}>
            <label class="form-check-label" for="is-private">Mantenerlo privado</label>
        </div>
    </div>
    @include ('forum::category.partials.inputs.color')

    @slot('actions')
        <button type="submit" class="btn btn-primary pull-right">¡Hecho!</button>
    @endslot
@endcomponent