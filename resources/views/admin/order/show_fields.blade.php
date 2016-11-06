<div class="form-group col-sm-6">
    {!! Form::label('id', trans('order.id')) !!}
    <p>{!! $order['id'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_id', trans('order.user_id')) !!}
    <p>{!! $order['user_id'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('order_status_code', trans('order.order_status_code')) !!}
    <p>{!! $order['order_status_code'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('role', trans('order.role')) !!}
    <p>{!! $order['details'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('created_at', trans('order.created_at')) !!}
    <p>{!! $order['created_at'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('updated_at', trans('order.updated_at')) !!}
    <p>{!! $order['updated_at'] !!}</p>
</div>

