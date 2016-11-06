<table class="table table-responsive" id="shipper-table">
    <thead>
        <th>{{ trans('shipper.id') }}</th>
        <th>{{ trans('shipper.name') }}</th>
        <th>{{ trans('shipper.phone') }}</th>
        <th>{{ trans('shipper.address') }}</th>
        <th>{{ trans('shipper.status_id') }}</th>
        <th>{{ trans('shipper.action') }}</th>
    </thead>
    <tbody>
    @foreach($shippers as $shipper)
        <tr>
            <td>{{ $shipper->id }}</td>
            <td>{{ $shipper->name }}</td>
            <td>{{ $shipper->phone }}</td>
            <td>{{ $shipper->address }} </td>
            <td>{{ $shipper->status_id }} </td>
            <td>
                {!! Form::open(['route' => ['shipper.destroy', $shipper->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('shipper.show', [$shipper->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('shipper.edit', [$shipper->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
