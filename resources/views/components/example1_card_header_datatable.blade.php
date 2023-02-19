<div class="card-header border-bottom-dashed">

    <div class="row g-4 align-items-center">
        <div class="col-sm">
            <div>
                <h4 class="card-title mb-0">{{$card_header_text}}</h4>
            </div>
        </div>
        <div class="col-sm-auto">
            <div>
                <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                <a class="btn btn-success add-btn" id="create-btn" href="{{route($name_route)}}"><i class="ri-add-line align-bottom me-1"></i>  {{ $add_text }}</a>

            </div>
        </div>
    </div>
</div>
