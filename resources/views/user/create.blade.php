@extends('layouts.base')
@section('title','Add User ')
@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Add User
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right">
                        <div class="kt-portlet__body">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Name</label>
                                    <input type="name" class="form-control" placeholder="Enter name">
                                </div>
                                <div class="col-lg-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Enter user email">
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Phone number</label>
                                <input type="text" class="form-control" placeholder="Enter phone">
                            </div>
                            <div class="col-lg-6">
                                <label>Role</label>
                                <select class="form-control kt-select2" id="kt_select2_1" name="param">
                                    <option value="admin">admin</option>
                                    <option value="staff">staff</option>
                                </select>
                            </div>

                        </div>

                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <button type="reset" class="btn btn-primary">Save</button>
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
@section('custom-scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/select2.js') }}" type="text/javascript"></script>
@endsection

