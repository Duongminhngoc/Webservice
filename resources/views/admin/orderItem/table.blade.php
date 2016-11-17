<script>
        function confirmDelete(id){
            bootbox.confirm("Are you sure?", function(result) {
                if(result) $("#delete-orderItem-"+id).submit();
            });
        }
</script>
<script>
    @if (Session::has('msg'))

        bootbox.alert("{{ Session::get('msg') }}");

    @endif
</script>
<div class="table-responsive">
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
            <td class="text-right" width="3%">
                <a href="{{ route('orderItem.edit',$orderItem['id'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
            </td>
            <td class="text-right" width="3%">
                <a onclick="confirmDelete({{$orderItem['id']}});" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                    <form id="delete-orderItem-{{$orderItem['id']}}" style="display:none;" role="form" action="{{ route('orderItem.destroy', $orderItem['id']) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
        
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>