@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

<div class="form-group col-sm-6">
    {!! Form::label('product_id', trans('orderItem.product_id')) !!}
    {!! Form::text('product_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('order_id', trans('orderItem.order_id')) !!}
    {!! Form::text('order_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('order_item_status_code', trans('orderItem.order_item_status_code')) !!}
    {!! Form::text('order_item_status_code', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('quantity', trans('orderItem.quantity')) !!}
    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('price', trans('orderItem.price')) !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('details', trans('orderItem.details')) !!}
    {!! Form::text('details', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('orderItem.index') !!}" class="btn btn-default">{{ trans('orderItem.back') }}</a>
</div>
