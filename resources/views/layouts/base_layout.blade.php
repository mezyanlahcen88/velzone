@extends('layouts.main_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @yield('card_header')

            @yield('card_body')

        </div>

        <!-- end col -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
