<div class="row g-4 align-items-center">
    <div class="col-sm-3">
        <div class="search-box ms-2">
            <input type="text" class="form-control search" placeholder="{{ trans('general_general_search') }}">
            <i class="ri-search-line search-icon"></i>
        </div>
    </div>
    <div class="col-sm-auto ms-auto">
        <div class="hstack gap-2">
            <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
          
            <a class="btn btn-success add-btn" id="create-btn" href="{{route($name_route)}}"><i class="ri-add-line align-bottom me-1"></i> {{ $add_text }}</a>


        </div>
    </div>
</div>
{{-- <div class="row g-4 mb-3">
    <div class="col-sm-auto">
        <div>
            <a class="btn btn-success add-btn" id="create-btn" href="{{route($name_route)}}"><i class="ri-add-line align-bottom me-1"></i> {{ $add_text }}</a>
            <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
        </div>
    </div>
    <div class="col-sm">
        <div class="d-flex justify-content-sm-end">
            <div class="search-box ms-2">
<input type="text" class="form-control search" placeholder="{{ trans('general_general_search') }}">
                <i class="ri-search-line search-icon"></i>
            </div>
        </div>
    </div>
</div> --}}
