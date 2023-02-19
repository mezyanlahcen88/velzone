<div class="card-body border-bottom-dashed border-bottom">
    <form action="{{route($name_route)}}"  method="GET" >
        <div class="row g-3">
            <div class="col-xl-2">
                <div>
                    <select class="form-control w-50" data-plugin="choices" data-choices data-choices-search-false
                        name="paginator" id="idStatus">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="250">250</option>
                    </select>
                </div>
            </div>
            <!--end col-->
            <div class="col-xl-8">
                <div class="search-box d-flex">
                       <input type="text" class="form-control"
                        placeholder="{{ trans('general_general_keyword') }}" name="search" value="{{ old('search') }}">
                    <button class="btn btn-primary"><i class="ri-search-2-line"></i></button>
                </div>
            </div>
            <!--end col-->

            <div class="col-xl-2">
                <div>
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="offcanvas"
                        href="#offcanvasExample"><i class="ri-equalizer-fill me-2 align-bottom"></i>Fliters
                    </button>
                </div>

            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </form>
</div>
