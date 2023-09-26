@extends('backend.layouts.master')
@section('title','Record Details')

@section('css')
    <link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title space_create">Details
                    <span class="custom_view_pull">
                        <a href="{{route('backend.record.index')}}" class="btn btn-info custom_btn_cl btn-purple"><i class="fas fa-list text-light mr-2"></i>List</a>
                    </span>
                </h4>
                <hr class="custom_hr">
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                    <tr>
                        <th>register_no</th>
                        <td>{{ $row->register_no }}</td>
                    </tr>
                    <tr>
                        <th>applicant</th>
                        <td>{{ $row->applicant }}</td>
                    </tr>
                    <tr>
                        <th>register_date</th>
                        <td>{{ $row->register_date }}</td>
                    </tr>
                    <tr>
                        <th>register_no</th>
                        <td>{{ $row->age }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
@endsection
