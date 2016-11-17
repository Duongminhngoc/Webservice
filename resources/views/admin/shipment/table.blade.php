<script>
        function confirmDelete(id){
            bootbox.confirm("Are you sure?", function(result) {
                if(result) $("#delete-shipment-"+id).submit();
            });
        }
</script>
<script>
    @if (Session::has('msg'))

        bootbox.alert("{{ Session::get('msg') }}");

    @endif
</script>
<div class="table-responsive">
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
            <td>{{ $shipment->shipper_id }}</td>
            <td>{{ $shipment->shipment_status_id }}</td>
            <td>{{ $shipment->invoice_id }} </td>
            <td>{{ $shipment->tracking_number }}</td>
            <td>{{ $shipment->datetime_start }}</td>
            <td>{{ $shipment->datetime_end }}</td>
            <td>{{ $shipment->other_shipment_details }}</td>
            <td class="text-right" width="3%">
                <a onclick="confirmDelete({{$shipment['id']}});" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                    <form id="delete-shipment-{{$shipment['id']}}" style="display:none;" role="form" action="{{ route('shipment.destroy', $shipment['id']) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
        
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>