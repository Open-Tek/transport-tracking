
@extends('layouts.base')
@section('title','dashboard')

@section('content')
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">Dashboard</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    @if (session('status'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ session('status') }}--}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    You are logged in!--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-lg">
                    <div class="col-md-12 col-lg-6 col-xl-3">

                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        Total Deliveries
                                    </h4>

                                </div>
                                <span class="kt-widget24__stats kt-font-brand">
														139
													</span>
                            </div>
                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 70%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                                <span class="kt-widget24__number">
														78%
													</span>
                            </div>
                        </div>

                        <!--end::Total Profit-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">

                        <!--begin::New Feedbacks-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        Losses
                                    </h4>

                                </div>
                                <span class="kt-widget24__stats kt-font-warning">
														34
													</span>
                            </div>
                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 34%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                                <span class="kt-widget24__number">
														34%
													</span>
                            </div>
                        </div>

                        <!--end::New Feedbacks-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">

                        <!--begin::New Orders-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        Godowns
                                    </h4>

                                </div>
                                <span class="kt-widget24__stats kt-font-danger">
														5
													</span>
                            </div>
                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 6%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                                <span class="kt-widget24__number">
														100%
													</span>
                            </div>
                        </div>

                        <!--end::New Orders-->
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-3">

                        <!--begin::New Users-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        Profits
                                    </h4>
                                    <span class="kt-widget24__desc">
															Profits
														</span>
                                </div>
                                <span class="kt-widget24__stats kt-font-success">
														102
													</span>
                            </div>
                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                                <span class="kt-widget24__number">
														90%
													</span>
                            </div>
                        </div>

                        <!--end::New Users-->
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    --}}

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                            <h3 class="kt-portlet__head-title">
                                Lost Products
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">

                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                            <thead class="text-center">
                            <tr>
                                <th>Truck no.</th>
                                <th>Godown source</th>
                                <th>Godown destination</th>
                                <th>Product</th>
                                <th>Count</th>

                            </tr>
                            </thead>
                            <tbody class="text-center">
                            <tr>


                                <td>MH 06 AT 7852</td>
                                <td>3</td>
                                <td>4</td>
                                <td >Blue Thread</td>
                                <td> 5</td>



                            </tr>
                            <tr>
                                <td>MH 12 YP 7122</td>
                                <td>1</td>
                                <td>2</td>
                                <td >Kacha Dhaga</td>
                                <td>7</td>


                            </tr>
                            <tr>
                                <td>MH 12 GP 7122</td>
                                <td>4</td>
                                <td>6</td>
                                <td>Jute sack</td>
                                <td>8</td>


                            </tr>
                            <tr>
                                <td>MH 12 IJ 7122</td>
                                <td>4</td>
                                <td>6</td>
                                <td>Pakka dhaga</td>
                                <td>5</td>


                            </tr>
                            <tr>
                                <td>MH 12 YP 7122</td>
                                <td>4</td>
                                <td>6</td>
                                <td>Jute Bag</td>
                                <td>5</td>


                            </tr>
                            <tr>
                                <td>MH 12 YP 7122</td>
                                <td>4</td>
                                <td>6</td>
                                <td>Jute sack</td>
                                <td>4</td>


                            </tr>

                            </tbody>
                        </table>

                        <!--end: Datatable -->
                    </div>
                </div>

            </div>

        </div>
        <div class="col-lg-4">

            <!--begin::Portlet-->
        @include('includes.widget-sales')

            <!--end::Portlet-->
        </div>
    </div>
    </div>
@endsection
@section('custom-scripts')

    <script src="{{ asset('assets/js/pages/components/charts/morris-charts.js') }}" type="text/javascript"></script>
@endsection
