<table class="table table-responsive" id="restaurant-table">
    <thead>
        <th>{{ trans('restaurant.id') }}</th>
        <th>{{ trans('restaurant.name') }}</th>
        <th>{{ trans('restaurant.county_id') }}</th>
        <th>{{ trans('restaurant.owner_id') }}</th>
        <th>{{ trans('restaurant.phone') }}</th>
        <th>{{ trans('restaurant.email') }}</th>
        <th>{{ trans('restaurant.address') }}</th>
        <th>{{ trans('restaurant.description') }}</th>
        <th>{{ trans('restaurant.action') }}</th>
    </thead>
    <tbody>
    @foreach($restaurants as $restaurant)
        <tr>
            <td>{{ $restaurant['id'] }}</td>
            <td>{{ $restaurant['name'] }}</td>
            <td>{{ $restaurant['county'] }}</td>
            <td>{{ $restaurant['owner_id'] }}</td>
            <td>{{ $restaurant['phone'] }}</td>
            <td>{{ $restaurant['email'] }}</td>
            <td>{{ $restaurant['address'] }}</td>
            <td>{{ $restaurant['description'] }}</td>
            <td>
                {!! Form::open(['route' => ['restaurant.destroy', $restaurant['id']], 'method' => 'delete']) !!}
                <div class='btn-group'>
                @php
                        $restaurantId = $restaurant['id'];
                    @endphp
                    <a href="{!! route('restaurant.show', [$restaurant['id']]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href='{!! url("admin/restaurant/$restaurantId/edit") !!}' class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
