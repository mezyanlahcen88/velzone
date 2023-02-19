<div class="d-flex justify-content-center gap-2">
    {{-- @can($show_permission)
        <div class="edit">
            <a href="{{ route($show_route, $object->id) }}" class="btn btn-success btn-sm" title="Voir"><i
                    class="las la-eye"></i>
            </a>
        </div>
    @endcan --}}

    @can($edit_permission)
        <div class="edit">
            <a href="{{ route($edit_route, $object->id) }}" class="btn btn-primary btn-sm edit" title="Voir" data-id="{{$object->id}}"><i
                    class="las la-edit"></i>
            </a>
        </div>
    @endcan

        <div class="remove">
            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal"
                data-bs-target="#deleteRecordModal{{ $object->id }}"><i class="las la-trash"></i></button>
        </div>
    
</div>
