<div class="form-group">
    {!! Form::label('id', trans('shipment.id')) !!}
    <p>{!! $shipment['id'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('shipper_id', trans('shipment.shipper_id')) !!}
    <p>{!! $shipment['shipper_id'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('shipment_status_id', trans('shipment.shipment_status_id')) !!}
    <p>{!! $shipment['shipment_status_id'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('invoice_id', trans('shipment.invoice_id')) !!}
    <p>{!! $shipment['invoice_id'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('tracking_number', trans('shipment.tracking_number')) !!}
    <p>{!! $shipment['tracking_number'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('datetime_start', trans('shipment.datetime_start')) !!}
    <p>{!! $shipment['datetime_start'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('datetime_end', trans('shipment.datetime_end')) !!}
    <p>{!! $shipment['datetime_end'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('other_shiment_details', trans('shipment.other_shiment_details')) !!}
    <p>{!! $shipment['other_shiment_details'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', trans('shipment.created_at')) !!}
    <p>{!! $shipment['created_at'] !!}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', trans('shipment.updated_at')) !!}
    <p>{!! $shipment['updated_at'] !!}</p>
</div>

