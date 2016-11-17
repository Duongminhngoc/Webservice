@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
<div class="col-md-6">
<div class="form-group">
    {!! Form::label('name', trans('restaurant.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('county_id', trans('restaurant.county_id')) !!}
    {!! Form::select('county_id', $counties, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('owner_id', trans('restaurant.owner_id')) !!}
    {!! Form::select('owner_id', $users, null, ['class' => 'form-control','style'=>'size:5;']) !!}
</div>

<div class="form-group">
    {!! Form::label('phone', trans('restaurant.phone')) !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
</div>
<div class="col-md-6">
<div class="form-group">
    {!! Form::label('email', trans('restaurant.email')) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', trans('restaurant.address')) !!}
    {!! Form::text('address',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', trans('restaurant.description')) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','style'=> 'height:107px;']) !!}
</div>
</div>
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('restaurant.index') !!}" class="btn btn-default">{{ trans('restaurant.back') }}</a>
</div>
