<table class="table table-responsive" id="orderItem-table">
    <thead>
        <th>{{ trans('orderItem.id') }}</th>
        <th>{{ trans('orderItem.product_id') }}</th>
        <th>{{ trans('orderItem.order_id') }}</th>
        <th>{{ trans('orderItem.order_item_status_code') }}</th>
        <th>{{ trans('orderItem.quantity') }}</th>
        <th>{{ trans('orderItem.price') }}</th>
        <th>{{ trans('orderItem.details') }}</th>
        <th>{{ trans('orderItem.action') }}</th>
    </thead>
    <tbody>
    @foreach($orderItems as $orderItem)
        <tr>
            <td>{{ $orderItem->id }}</td>
            <td>{{ $orderItem->product->name }}</td>
            <td>{{ $orderItem->order_id }}</td>
            <td>
            @if ($orderItem->order_item_status_code == 1)
                <p>Đã giao hàng  <button><i style="color:green" class="glyphicon glyphicon-ok"></i></button></p>
            @else
                <p>Chưa giao hàng  <button><i style="color:red" class="glyphicon glyphicon-remove"></button></i></p>
            @endif
            </td>
            <td>{{ $orderItem->quantity }}</td>
            <td>{{ $orderItem->price }}</td>
            <td>{{ $orderItem->details }}</td>
            <td>
                {!! Form::open(['route' => ['orderItem.destroy', $orderItem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orderItem.show', [$orderItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orderItem.edit', [$orderItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
