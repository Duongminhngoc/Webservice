
<script>
        $(document).ready(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            yearRange: "1800:2017"
        });
        });
</script>
@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
<div class="col-md-6 col-sm-6">
<div class="form-group col-sm-12">
    {!! Form::label('name', trans('user.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('email', trans('user.email')) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('user_access_level', trans('Role')) !!}
    {!! Form::select('user_access_level', array('0'=>'Custommer','1'=>'User','2'=>'Admin'),[], array('class' => 'form-control')) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('password', trans('user.password')) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {{ Form::label('password', trans('label.confirm_password'))}}
    {{ Form::password('password', ['class'=>'form-control', 'name'=>'password_confirmation']) }}
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="form-group col-sm-12">
    {!! Form::label('phone_number', trans('Phone number')) !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('birth_day', trans('Birth day')) !!}
    {!! Form::text('birth_day', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('address', trans('Address')) !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('city', trans('City')) !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('gender', trans('Gender')) !!}
    {!! Form::select('gender', array('0'=>'Nam','1'=>'Nữ'),[], array('class' => 'form-control')) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('avatar', trans('user.avatar')) !!}
    {!! Form::file('avatar') !!}
</div>
</div>
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('user.index') !!}" class="btn btn-default">{{ trans('user.back') }}</a>
</div>

