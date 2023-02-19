<div class="card-body">
    <div id="customerList">
        <div class="table-responsive table-card mt-3 mb-1">
<table class="table align-middle table-nowrap table-bordered" id="customerTable">
                <thead class="table-light">
                    <tr class="text-center">
                        <th scope="col" style="width: 50px;">
                            <div class="form-check">
<input class="form-check-input" type="checkbox" id="checkAlll" value="option">
                            </div>
                        </th>
                        <th class="sort" data-sort="customer_name">{{ trans('configuration.suppliers_list')}}
</th>
                        <th class="sort" data-sort="email">{{ trans('configuration.company_number')}}
                        </th>
                        <th class="sort" data-sort="phone">{{ trans('configuration.company_email')}}
                        </th>
                        <th class="sort" data-sort="date">{{ trans('configuration.salle_manager_name')}}
                        </th>
                        <th class="sort" data-sort="status">{{ trans('configuration.country_id')}}

                        </th>
                    </th>
<th class="sort" data-sort="action">{{ trans('general_general_action')}}
                        </th>
                    </tr>
                </thead>
                <tbody class="list form-check-all">
                    {{-- @foreach ($objects as $object) --}}

                    <tr class="text-center">
                        <th scope="row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                            </div>
                        </th>

                        <td class="customer_name">Mary Cousar </td>
                        <td class="email">marycousar@velzon.com</td>
                        <td class="phone">580-464-4694</td>
                        <td class="date">06 Apr, 2021</td>
                        <td class="status"><span class="badge badge-soft-success text-uppercase">Active</span></td>
                        <td>
                            {{-- @include('components.actions', [
                                'show_route' => 'suppliers.show',
                                'edit_route' => 'suppliers.edit',
                                'show_permission' => 'user-show',
                                'edit_permission' => 'user-edit',
                                'delete_permission' => 'user-delete',
                            ]) --}}
                        </td>
                    </tr>
                    @include('components.delete_modal',[
                        'delete_route'=>'suppliers.destroy'
                     ])
                {{-- @endforeach --}}
                </tbody>
            </table>
            @include('components.footer_datatable')
    </div>
</div><!-- end card -->
