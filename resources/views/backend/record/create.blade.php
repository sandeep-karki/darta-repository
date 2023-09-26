@extends('backend.layouts.master')
@section('title', 'Create Record')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Record</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title">Create Record
                        <a href="{{route('backend.record.index')}}" class="btn btn-info custom_btn_cl btn-purple"><i class="fas fa-list text-light mr-2"></i>List</a>
                    </h4>
                    <hr class="custom_hr">
                    @include('backend.record.includes.main_form',['route' => 'backend.record.store', 'button' => 'Save','page' => 'create'])
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    $(document).on("submit","form.main_form",function(e) {
        e.preventDefault();
        let button = $(this).find("button[type=submit]");
        let current = $(this);
        button.prop("disabled", true);

        let route = $(this).attr('action');
        let method = $(this).attr('method');
        let data = new FormData(this);
        $.ajax({
            url: route,
            data: data,
            method: method,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(res) {
                $('span.text-danger').remove();
                button.prop("disabled", false);
                window.location.href = res.url;
            },
            error: function(err) {
                button.prop("disabled", false);
                $('span.text-danger').remove();
                if (err.responseJSON.errors) {
                    $.each(err.responseJSON.errors, function(key, value) {
                        let splitted_key = key.split('.');
                        if (splitted_key.length > 1) {
                            $("<span class='text-danger'>" + value + "<br></span>").insertAfter($("[name='" + splitted_key[0] + "[]']")[splitted_key[1]]);
                        }
                        $('#' + key).after("<span class='text-danger'>" + value + "<br></span>");
                        current.find('#' + key+'_error').after("<span class='text-danger'>" + value + "<br></span>");
                    });
                }
            },
        });
    });

    $(document).ready(function () {

        $('#permanent_province').on('change', function () {
            let province_id = $(this).val();
            if (province_id.length > 0) {
                $.ajax({
                    url: "{{ route('backend.get-districts') }}",
                    data: {_token: "{{csrf_token()}}", province_id: province_id},
                    dataType: "JSON",
                    method: "POST",
                    success: function (resp) {
                        $('#permanent_district').children('option').not(':first').remove();
                        $.each(resp, (key, value) => {
                            $('#permanent_district').append('<option value= ' + key + '>' + value + '</option>');
                        });
                    },
                })
            }
            else {
                $('#permanent_district').children('option').not(':first').remove();
            }
        });

        $('#permanent_district').on('change', function () {
            let district_id = $(this).val();
            if (district_id.length > 0) {
                $.ajax({
                    url: "{{ route('backend.get-municipalities') }}",
                    data: {_token: "{{csrf_token()}}", district_id: district_id},
                    dataType: "JSON",
                    method: "POST",
                    success: function (resp) {
                        $('#permanent_municipality').children('option').not(':first').remove();
                        $.each(resp, (key, value) => {
                            $('#permanent_municipality').append('<option value= ' + key + '>' + value + '</option>');
                        });
                    },
                })
            }
            else {
                $('#permanent_municipality').children('option').not(':first').remove();
            }
        });

        $('#temporary_province').on('change', function () {
            let province_id = $(this).val();
            if (province_id.length > 0) {
                $.ajax({
                    url: "{{ route('backend.get-districts') }}",
                    data: {_token: "{{csrf_token()}}", province_id: province_id},
                    dataType: "JSON",
                    method: "POST",
                    success: function (resp) {
                        $('#temporary_district').children('option').not(':first').remove();
                        $.each(resp, (key, value) => {
                            $('#temporary_district').append('<option value= ' + key + '>' + value + '</option>');
                        });
                    },
                })
            }
            else {
                $('#temporary_district').children('option').not(':first').remove();
            }
        });

        $('#temporary_district').on('change', function () {
            let district_id = $(this).val();
            if (district_id.length > 0) {
                $.ajax({
                    url: "{{ route('backend.get-municipalities') }}",
                    data: {_token: "{{csrf_token()}}", district_id: district_id},
                    dataType: "JSON",
                    method: "POST",
                    success: function (resp) {
                        $('#temporary_municipality').children('option').not(':first').remove();
                        $.each(resp, (key, value) => {
                            $('#temporary_municipality').append('<option value= ' + key + '>' + value + '</option>');
                        });
                    },
                })
            }
            else {
                $('#temporary_municipality').children('option').not(':first').remove();
            }
        });

    });
</script>
@endsection
