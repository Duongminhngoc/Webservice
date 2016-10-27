<table class="table table-responsive" id="products-table">
    <thead>
        <th>{{ trans('product.id') }}</th>
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
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['product_type_id'] }}</td>
            <td>{{ $product['product_status_id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['quantity'] }} </td>
            <td><span></span><img src="{{ Request::root() }}/uploads/images/{!! $product['image'] !!}" width="80px" height="50px"></span></td>
            <td>
                {!! Form::open(['url' => ['services/product', $product['id']], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @php
                        $productId = $product['id'];
                    @endphp
                    <a href="{!! url('admin/product', [$product['id']]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href='{!! url("admin/product/$productId/edit") !!}' class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
