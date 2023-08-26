@extends('backend.layouts.master')
@section('title', 'Edit Test')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Test</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title">Edit Test
                        <a href="{{route('backend.test.create')}}" class="btn btn-success custom_btn_cl m-left-20 btn-green"><i class="fas fa-pencil-alt text-light mr-2"></i>Create</a>
                        <a href="{{route('backend.test.index')}}" class="btn btn-info custom_btn_cl btn-purple"><i class="fas fa-list text-light mr-2"></i>List</a>
                    </h4>
                    <hr class="custom_hr">
                    @include('backend.test.includes.main_form',['route' => 'backend.test.update', 'method' => 'put','files' => true,'button' => 'Update','page' => 'edit'])
                </div>
            </div>
        </div>
    </div>
@endsection

