@extends('layouts.base')
@section('title','create product')
@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Add Product
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right">
                        <div class="kt-portlet__body">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Add Product name</label>
                                    <input type="text" class="form-control" placeholder="Enter product name">
                                </div>
                                <div class="col-lg-6">
                                    <label>Add Product color</label>
                                    <input type="text" class="form-control" placeholder="Enter product color">
                                </div>

                            </div>

                        </div>



                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <a href="/products" class="btn btn-primary">Save</a>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>

                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>

@endsection

