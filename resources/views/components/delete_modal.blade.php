 <!-- deleteModal -->
 <div class="modal fade zoomIn" id="deleteRecordModal{{$object->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route($delete_route,$object->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <input type="hidden" name="object_id" value="{{$object->id}}">
                        <h4>Are you Sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!--end modal -->
