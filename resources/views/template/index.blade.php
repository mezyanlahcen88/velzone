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
        'subtitle' => trans('configuration.emails_list'), //tochange
    ])
@endsection
@section('card_header')
    @include('components.card_header_datatable', [
        'card_header_text' => 'Manage',
    ])
@stop
@section('card_body')
    @section('header_card_body')
        @include('components.header_card_body_datatable', [
            'name_route' => 'users.create', // to change
        ])
    @stop
@include('template.table') {{-- to change --}}

@endsection

@section('js')
@include('layouts.includes.datatable_js')
@endsection
