@extends('layouts.base')
@section('title','Dispatchments')
@section('content')
    {{ Session::put('key','2')}}
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
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
                    <tr>


                        <td>29 JAN 2020</td>
                        <td>Mumbai Warehouse</td>
                        <td>Nagpur Warehouse</td>

                        @if(Session::get('key') == 1)
                            <td ><span class="badge badge-warning">In transit </span></td>
                        @endif
                        @if(Session::get('key') == 2)
                            <td ><span class="badge badge-success">Reached </span></td>
                        @endif
                        @if(Session::get('key') == 0)
                            <td ></td>
                        @endif

                        <td >MH 04 GX 1920</td>


                    </tr>


                    </tbody>
                </table>

                <!--end: Datatable -->
            </div>
        </div>

    </div>

@endsection
