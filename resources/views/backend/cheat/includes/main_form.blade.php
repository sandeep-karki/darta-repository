@if($page == 'create')
  {!! Form::open(['route' => $route, 'method' => 'post', 'files' => true , 'class' => 'form-horizontal data-parsley-validate custom_form']) !!}
@else
  {!! Form::model($data['row'],['route' => [$route, $data['row']->id], 'method' => 'put','files' => true]) !!}
  {!! Form::hidden('id', null) !!}
@endif

<div class="form-group row mb-3">
    {!! Form::label('cheat_medium', 'ठगीको माध्यम *', ['class' => 'col-3 col-form-label']) !!}
    <div class="col-9">
    {!! Form::text('cheat_medium', null, ['class' => "form-control", 'id' => 'cheat_medium', 'placeholder' => 'ठगीको माध्यम ...']) !!}
    @include('error.single_field_validation_message',['fieldname' => 'cheat_medium'])
    </div>
</div>

<div class="form-group mb-0 justify-content-end row">
    <div class="col-9">
    {!! Form::button('<i class="fas fa-save"></i> Save' , ['class' => 'btn btn-info btn-green ', 'type' => 'submit']) !!}
    {!! Form::button('<i class="fas fa-redo-alt"></i> Reset' , ['class' => 'btn btn-danger trash-bcolor', 'type' => 'reset']) !!}
    </div>
</div>

{!! Form::close() !!}
