<script>
        function confirmDelete(id){
            bootbox.confirm("Are you sure?", function(result) {
                if(result) $("#delete-product-"+id).submit();
            });
        }
</script>
<script>
    @if (Session::has('msg'))

        bootbox.alert("{{ Session::get('msg') }}");

    @endif
</script>
<div class="table-responsive">
<table class="table table-responsive" id="products-table">
    <thead>
        <th>No</th>
        <th>{{ trans('product.type') }}</th>
        <th>{{ trans('product.status') }}</th>
        <th>{{ trans('product.name') }}</th>
        <th>{{ trans('product.price') }}</th>
        <th>{{ trans('product.quantity') }}</th>
        <th>{{ trans('product.image') }}</th>
        <th>{{ trans('product.action') }}</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $i++}}</td>
            <td>{{ $product['product_type_id'] }}</td>
            <td>{{ $product['product_status_id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['quantity'] }} </td>
            <td><span></span><img src="{{ url('/') }}/uploads/images/{!! $product['image'] !!}" width="80px" height="50px"></span></td>
            <!-- <td class="text-right" width="3%">
                <a class="btn btn-primary" href="{{ route('product.show',$product['id']) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
            </td> -->
            <td class="text-right" width="3%">
                <a href="{{ route('product.edit',$product['id'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
            </td>
            <td class="text-right" width="3%">
                <a onclick="confirmDelete({{$product['id']}});" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                    <form id="delete-product-{{$product['id']}}" style="display:none;" role="form" action="{{ route('product.destroy', $product['id']) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
        
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
