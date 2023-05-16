@component('forum::modal-form')
    @slot('key', 'edit-category')
    @slot('title', trans('forum::general.edit'))
    @slot('route', Forum::route('category.update', $category))
    @slot('method', 'PATCH')

    <div class="mb-3">
        <input type="text" name="title" value="{{ old('title') ?? $category->title }}" class="form-control" placeholder="Título">
    </div>
    <div class="mb-3">
        <input type="text" name="description" value="{{ old('description') ?? $category->description }}" class="form-control" placeholder="Descripción">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input type="hidden" name="accepts_threads" value="0" />
            <input class="form-check-input" type="checkbox" name="accepts_threads" id="accepts-threads" value="1" {{ $category->accepts_threads ? 'checked' : '' }}>
            <label class="form-check-label" for="accepts-threads">Habilitar comentarios</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input type="hidden" name="is_private" value="0" />
            <input class="form-check-input" type="checkbox" name="is_private" id="is-private" value="1" {{ $category->is_private ? 'checked' : '' }} {{ $privateAncestor != null ? 'disabled' : '' }}>
            <label class="form-check-label" for="is-private">Hacerlo privado</label>
        </div>
    </div>
    @if ($privateAncestor != null)
        <div class="alert alert-primary" role="alert">
            {!! trans('forum::categories.access_controlled_by_private_ancestor', ['category' => "<a href=\"{$privateAncestor->route}\">{$privateAncestor->title}</a>"]) !!}
        </div>
    @endif

    @include ('forum::category.partials.inputs.color')

    @slot('actions')
        <button type="submit" class="btn btn-primary pull-right">¡Hecho!</button>
    @endslot
@endcomponent