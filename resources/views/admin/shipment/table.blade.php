<table class="table table-responsive" id="shipment-table">
    <thead>
        <th>{{ trans('shipment.id') }}</th>
        <th>{{ trans('shipment.shipper_id') }}</th>
        <th>{{ trans('shipment.shipment_status_id') }}</th>
        <th>{{ trans('shipment.invoice_id') }}</th>
        <th>{{ trans('shipment.tracking_number') }}</th>
        <th>{{ trans('shipment.datetime_start') }}</th>
        <th>{{ trans('shipment.datetime_end') }}</th>
        <th>{{ trans('shipment.other_shipment_details') }}</th>
        <th>{{ trans('shipment.action') }}</th>
    </thead>
    <tbody>
    @foreach($shipments as $shipment)
        <tr>
            <td>{{ $shipment->id }}</td>
            <td>{{ $shipment->name }}</td>
            <td>{{ $shipment->email }}</td>
            <td>{{ $shipment->role === 0 ? "shipment" : "Admin" }} </td>
            <td><span></span><img src="{{ Request::root() }}/uploads/images/{!! $shipment->avatar !!}" width="80px" height="50px"></span></td>
            <td>
                {!! Form::open(['route' => ['shipment.destroy', $shipment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('shipment.show', [$shipment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('shipment.edit', [$shipment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
