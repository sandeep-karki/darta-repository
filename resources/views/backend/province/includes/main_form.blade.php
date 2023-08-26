@if($page == 'create')
  {!! Form::open(['route' => $route, 'method' => 'post', 'files' => true , 'class' => 'form-horizontal data-parsley-validate custom_form']) !!}
@else
  {!! Form::model($data['row'],['route' => [$route, $data['row']->id], 'method' => 'put','files' => true]) !!}
  {!! Form::hidden('id', null) !!}
@endif

<div class="form-group row mb-3">
    {!! Form::label('province', 'प्रदेश *', ['class' => 'col-3 col-form-label']) !!}
    <div class="col-9">
    {!! Form::text('name_np', null, ['class' => "form-control", 'id' => 'name_np', 'placeholder' => 'प्रदेश ...']) !!}
    @include('error.single_field_validation_message',['fieldname' => 'name_np'])
    </div>
</div>

<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
    {!! Form::button('<i class="fas fa-save"></i> Save' , ['class' => 'btn btn-info btn-green ', 'type' => 'submit']) !!}
    {!! Form::button('<i class="fas fa-redo-alt"></i> Reset' , ['class' => 'btn btn-danger trash-bcolor', 'type' => 'reset']) !!}
    </div>
</div>

{!! Form::close() !!}
