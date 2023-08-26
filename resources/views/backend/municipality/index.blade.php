@extends('backend.layouts.master')
@section('title','Index Municipality')

@section('css')
    <link href="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endSection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Municipality</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Municipality List
                        <a href="{{route('backend.municipality.create')}}" class="btn btn-success custom_btn_cl m-left-20 btn-green"><i class="fas fa-pencil-alt text-light mr-2"></i>Create</a>
                    </h4>
                    <hr class="custom_hr">
                    <table id="dataTable" class="table table-striped dt-responsive nowrap w-100 dataTable">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>municipality</th>
                            <th>district</th>
                            <th>province</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['rows'] as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name_np }}</td>
                                <td>{{ $row->district->name_np }}</td>
                                <td>{{ $row->district->province->name_np }}</td>
                                <td>{{ $row->created_at->format('Y-m-d')  }}</td>
                                <td class="action_group">
                                    <a class="btn  btn-warning mr-right-5 btn-green" href="{{ route('backend.municipality.edit', $row->id) }}" title="Edit"><span class="mdi mdi-square-edit-outline"></span></a>
                                    {!! Form::open(['route' => ['backend.municipality.destroy', $row->id], 'class' => 'form-inline','method' => 'delete']) !!}
                                        <button type="button" class="btn btn-danger trash-bcolor delete-confirm" title="Delete"><span class="fas fa-trash"></span></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endSection

@section('js')
    <!-- third party js -->
    <script src="{{ asset('backend/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/general.js') }}"></script>
    <script>
        $('#dataTable').DataTable();
    </script>
@endsection
