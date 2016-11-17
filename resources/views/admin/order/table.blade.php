<script>
        function confirmDelete(id){
            bootbox.confirm("Are you sure?", function(result) {
                if(result) $("#delete-order-"+id).submit();
            });
        }
</script>
<script>
    @if (Session::has('msg'))

        bootbox.alert("{{ Session::get('msg') }}");

    @endif
</script>
<div class="table-responsive">
<table class="table table-responsive" id="order-table">
    <thead>
        <th>No</th>
        <th>User Order </th>
        <th>Status</th>
        <th>Date Order</th>
        <th>Details</th>
        <th></th>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $order['user_id'] }}</td>
            <td>
            @if($order['order_status_code'] == 1)
                <p>Đã giao hàng  <button><i style="color:green" class="glyphicon glyphicon-ok"></i></button></p>
            @else
                <p>Chưa giao hàng  <button><i style="color:red" class="glyphicon glyphicon-remove"></button></i></p>
            @endif
            </td>
            <td>{{ $order['date_order_place'] }} </td>
            <td>{{ $order['details'] }} </td>
            <td class="text-right" width="3%">
                <a onclick="confirmDelete({{$order['id']}});" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                    <form id="delete-order-{{$order['id']}}" style="display:none;" role="form" action="{{ route('order.destroy', $order['id']) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
        
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</button>
