<div class="form-group col-sm-6">
    {!! Form::label('id', trans('orderItem.id')) !!}
    <p>{!! $orderItem['id'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('product_id', trans('orderItem.product_id')) !!}
    <p>{!! $orderItem['product_id'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('order_id', trans('orderItem.order_id')) !!}
    <p>{!! $orderItem['order_id'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('order_item_status_code', trans('orderItem.order_item_status_code')) !!}
    <p>{!! $orderItem['order_item_status_code'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('quantity', trans('orderItem.quantity')) !!}
    <p>{!! $orderItem['quantity'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('price', trans('orderItem.price')) !!}
    <p>{!! $orderItem['price'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('details', trans('orderItem.details')) !!}
    <p>{!! $orderItem['details'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('created_at', trans('orderItem.created_at')) !!}
    <p>{!! $orderItem['created_at'] !!}</p>
</div>

<div class="form-group col-sm-12">
    {!! Form::label('updated_at', trans('orderItem.updated_at')) !!}
    <p>{!! $orderItem['updated_at'] !!}</p>
</div>

