
@extends('layouts.base_layout')
@section('title')
{{ trans('configuration.emails_list') }} {{-- to change --}}
@stop
@section('css')
    @include('layouts.includes.datatable_css')
@endsection
@section('page-header')
    @include('components.breadcrumb', [
'title' => trans('general_general_configuration'),
        'subtitle' => trans('configuration.emails_list'),//tochange
    ])
@endsection


@section('card_header')
@include('template.card_header_datatable',[
    'card_header_text'=>'Manage',
    ])

@stop
@section('card_body')
<div class="card" id="customerList">

    @include('template.header_card_body_datatable1')
    @include('template.table1')


</div>
@endsection

@section('js')
    @include('layouts.includes.datatable_js')
@endsection
