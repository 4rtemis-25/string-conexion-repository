@component('forum::modal-form')
    @slot('key', 'mark-as-read')
    @slot('title', trans('forum::general.mark_read'))
    @slot('route', Forum::route('unread.mark-as-read'))
    @slot('method', 'PATCH')

    <p>confirmar</p>

    @slot('actions')
        <button type="submit" class="btn btn-primary pull-right">
            Marcar como leido
        </button>
    @endslot
@endcomponent