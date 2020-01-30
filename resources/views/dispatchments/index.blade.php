@extends('layouts.base')
@section('title','Dispatchments')
@section('content')
{{--    {{ Session::put('key',0)}}--}}
    <div class=x"kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                    <h3 class="kt-portlet__head-title">
                        Today's Dispatchments
                    </h3>
                </div>

            </div>
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead class="text-center">
                    <tr>
                        <th>Date</th>
                        <th>Source</th>
                        <th>Destinations</th>
                        <th>Status</th>
                        <th>Transport</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @if(Session::get('key') === 1)
                        <tr>
                            <td>29 JAN 2020</td>
                            <td>Mumbai Warehouse</td>
                            <td>Nagpur Warehouse</td>
                            <td ><span class="badge badge-warning">In transit </span></td>
                            <td >MH 04 GX 1920</td>
                        </tr>
                    @elseif(Session::get('key') >= 2)
                        <tr>
                            <td>29 JAN 2020</td>
                            <td>Mumbai Warehouse</td>
                            <td>Nagpur Warehouse</td>
                            <td ><span class="badge badge-success">Reached </span></td>
                            <td >MH 04 GX 1920</td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="6">No dispatchments</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <!--end: Datatable -->
            </div>
        </div>

    </div>
    {{ Session::put('key', Session::get('key') + 1) }}
@endsection
