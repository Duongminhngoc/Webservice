<table class="table table-responsive" id="order-table">
    <thead>
        <th>{{ trans('order.id') }}</th>
        <th>{{ trans('order.user_id') }}</th>
        <th>{{ trans('order.order_status_code') }}</th>
        <th>{{ trans('order.details') }}</th>
        <th>{{ trans('order.action') }}</th>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{ $order['id'] }}</td>
            <td>{{ $order->user->name }}</td>
            <td>
            @if($order->order_status_code == 1)
                <p>Đã giao hàng  <button><i style="color:green" class="glyphicon glyphicon-ok"></i></button></p>
            @else
                <p>Chưa giao hàng  <button><i style="color:red" class="glyphicon glyphicon-remove"></button></i></p>
            @endif
            </td>
            <td>{{ $order->details }} </td>
            <td>
                {!! Form::open(['route' => ['order.destroy', $order->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('order.show', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('order.edit', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
