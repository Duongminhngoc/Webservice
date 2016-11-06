@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

<div class="form-group col-sm-6">
    {!! Form::label('shipper_id', trans('shipment.shipper_id')) !!}
    {!! Form::text('shipper_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('shipment_status_id', trans('shipment.shipment_status_id')) !!}
    {!! Form::select('shipment_status_id',trans('shipment.array_status'), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('invoice_id', trans('shipment.invoice_id')) !!}
    {!! Form::text('invoice_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('tracking_number', trans('shipment.tracking_number')) !!}
    {!! Form::text('tracking_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('datetime_start', trans('shipment.datetime_start')) !!}
    {!! Form::date('datetime_start',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('datetime_end', trans('shipment.datetime_end')) !!}
    {!! Form::date('datetime_end', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('other_shipment_details', trans('shipment.other_shipment_details')) !!}
    {!! Form::textarea('other_shipment_details', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('shipment.index') !!}" class="btn btn-default">{{ trans('shipment.back') }}</a>
</div>
