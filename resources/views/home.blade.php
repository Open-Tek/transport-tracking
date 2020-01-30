
@extends('layouts.base')
@section('title','dashboard')
@section('map-scripts')
<script src="{{ asset('assets/js/pages/components/charts/morris-charts.js') }}" type="text/javascript"></script>
@endsection

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
                                <th>Location</th>
                                <th>Godown destination</th>
                                <th>Product</th>
                                <th>Count</th>

                            </tr>
                            </thead>
                            <tbody class="text-center">
                            <tr>


                                <td>RF 35 644</td>
                                <td>1</td>
                                <td> Vidyanagar,<br> Vidya Vihar East, <br>Ghatkopar East,<br> Mumbai, <br>Maharashtra 400077</td>
                                <td>2</td>
                                <td >Red Thread</td>
                                <td>1</td>



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
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row no-gutters">
        <div class="col-lg-6">

                <div class="kt-portlet kt-portlet--mobile">
                    <!--begin::Portlet-->
                    <div id="donut"></div>

                    <script type="text/javascript">
                        Morris.Donut({
                            element: 'donut',
                            data: [
                                { label: "loss", value: 5 },
                                { label: "Profits", value: 95 },

                            ],
                            colors: ['#24a5ff','#2abe81']
                        });
                    </script>
                </div>

        </div>

        <div class="col-lg-6">
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <div class="kt-portlet kt-portlet--mobile">
            <!--begin::Portlet-->
            <div id="kt_morris_3"></div>

            <script type="text/javascript">
                Morris.Bar({
                    element: 'kt_morris_3',
                    data: [{
                        y: '2014',
                        a: 100,
                        b: 15
                    },
                        {
                            y: '2015',
                            a: 75,
                            b: 10
                        },
                        {
                            y: '2016',
                            a: 50,
                            b: 5
                        },
                        {
                            y: '2017',
                            a: 75,
                            b: 7
                        },
                        {
                            y: '2018',
                            a: 50,
                            b: 20
                        },
                        {
                            y: '2019',
                            a: 75,
                            b: 5
                        }
                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Profits', 'Loss'],
                    barColors: ['#2abe81', '#24a5ff']
                });
            </script>
                </div>
            </div>

        </div>

            <!--end::Portlet-->
        </div>
    </div>


@endsection

