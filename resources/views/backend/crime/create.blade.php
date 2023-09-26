@extends('backend.layouts.master')
@section('title', 'Create Test')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Crime</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title">Create crime type
                        <a href="{{route('backend.crime.index')}}" class="btn btn-info custom_btn_cl btn-purple"><i
                                class="fas fa-list text-light mr-2"></i>List</a>
                    </h4>
                    <hr class="custom_hr">
                    @include('backend.crime.includes.main_form',['route' => 'backend.crime.store', 'button' => 'Save','page' => 'create'])
                </div>
            </div>
        </div>
    </div>
@endsection
