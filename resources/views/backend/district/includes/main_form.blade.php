@if($page == 'create')
  {!! Form::open(['route' => $route, 'method' => 'post', 'files' => true , 'class' => 'form-horizontal data-parsley-validate custom_form']) !!}
@else
  {!! Form::model($data['row'],['route' => [$route, $data['row']->id], 'method' => 'put','files' => true]) !!}
  {!! Form::hidden('id', null) !!}
@endif

<div class="form-group row mb-3">
    {!! Form::label('province_id', 'प्रदेश *', ['class' => 'col-3 col-form-label']) !!}
    <div class="col-9">
    {!! Form::select('province_id',$provinces, null, ['class' => "form-control", 'id' => 'title', 'placeholder' => 'प्रदेश']) !!}
    @include('error.single_field_validation_message',['fieldname' => 'province_id'])
    </div>
</div>
<div class="form-group row mb-3">
    {!! Form::label('district_name', 'जिल्ला *', ['class' => 'col-3 col-form-label']) !!}
    <div class="col-9">
    {!! Form::text('district_name', null, ['class' => "form-control", 'id' => 'title', 'placeholder' => 'जिल्ला']) !!}
    @include('error.single_field_validation_message',['fieldname' => 'district_name'])
    </div>
</div>

<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
    {!! Form::button('<i class="fas fa-save"></i> Save' , ['class' => 'btn btn-info btn-green ', 'type' => 'submit']) !!}
    {!! Form::button('<i class="fas fa-redo-alt"></i> Reset' , ['class' => 'btn btn-danger trash-bcolor', 'type' => 'reset']) !!}
    </div>
</div>

{!! Form::close() !!}
