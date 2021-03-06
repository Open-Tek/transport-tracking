@extends('layouts.base')
@section('title','INDEX')
@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <div class="row">
                    <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                        @include('includes.widget-trends')
                    </div>
                    <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                            @include('includes.widget-sales')
                    </div>
                    <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
                            @include('includes.widget-top-locations')
                    </div>
                </div>
    </div>
@endsection
