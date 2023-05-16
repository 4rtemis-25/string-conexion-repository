@component('forum::modal-form')
    @slot('key', 'delete-category')
    @slot('title', trans('forum::general.delete'))
    @slot('route', Forum::route('category.delete', $category))
    @slot('method', 'DELETE')

    {{ trans('forum::general.generic_confirm') }}

    @if(! $category->isEmpty())
        <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" value="1" name="force" id="forceDelete">
            <label class="form-check-label" for="forceDelete">
                Confirmar que quiere eliminar
            </label>
        </div>
    @endif

    @slot('actions')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    @endslot
@endcomponent