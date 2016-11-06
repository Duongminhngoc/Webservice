@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

{!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) !!}

<div class="form-group col-sm-6">
    {!! Form::label('order_status_code', trans('order.order_status_code')) !!}
    {!! Form::select('order_status_code', $status, null, ['class' => 'form-control selcls']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('details', trans('order.details')) !!}
    {!! Form::text('details', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('order.index') !!}" class="btn btn-default">{{ trans('order.back') }}</a>
</div>
