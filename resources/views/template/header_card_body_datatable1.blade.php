<div class="card-body border-bottom-dashed border-bottom">
    <form>
        <div class="row g-3">
            <div class="col-xl-2">
                <div>
                    <select class="form-control" data-plugin="choices" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
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
                <div class="search-box">
                    <input type="text" class="form-control search" placeholder="Search for customer, email, phone, status or something...">
                    <i class="ri-search-line search-icon"></i>
                </div>
            </div>
            <!--end col-->

            <div class="col-xl-2">
                        <div>
                            <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                        </div>

                    </div>
                    <!--end col-->

        </div>
        <!--end row-->
    </form>
</div>
