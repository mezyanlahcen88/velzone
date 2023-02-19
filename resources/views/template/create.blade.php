@extends('layouts.base_layout')
@section('title')
    {{ trans('configuration.add_email') }}
@stop
@section('css')
    @include('layouts.includes.form_css')
@endsection
@section('page-header')
    @include('components.breadcrumb', [
        'title' => trans('general_general_configuration'),
        'subtitle' => trans('configuration.add_email'),
    ])
@endsection
@section('card_header')
    @include('components.card_header_form', [
        'form_text' => trans('configuration.show_email'),
        'name_route' => route('emails.index'),
    ])
@endsection
@section('card_body')
    <div class="card-body">
        <div class="live-preview">
            <div class="row gy-4">
                <form action="  {{ route('roles.store') }} " method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                            <div class="form-group" autocomplete="false">
                                <label for="role"> {{ trans('user_form_role') }} &nbsp; <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                    aria-describedby="helpId"
                                    placeholder=" {{ trans('configuration.role_name_placeholder') }}"
                                    value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for=""> {{ trans('configuration.permissions_list') }} &nbsp;<span
                                class="text-danger">*</span></label>
                    </div>
                    <div class="row">
                        <div class="col-xxl-4">
                            <div class="card border card-border-success">
                                <div class="card-header">
                                    <h6 class="card-title mb-0"></h6>
                                </div>
                                <div class="card-body">
                                    <label class="ckbox mb-1 w-100">
                                        <input type="checkbox" name="permissions[]">
                                        <span>
                                        </span></label>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                            @error('permissions')
                                <p class="text-danger"><small>{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <button class="btn ripple btn-outline-primary mt-3"
                        type="submit">{{ trans('general_general_save') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @include('layouts.includes.form_js')
@endsection
