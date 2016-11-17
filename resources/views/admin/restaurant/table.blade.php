<script>
        function confirmDelete(id){
            bootbox.confirm("Are you sure?", function(result) {
                if(result) $("#delete-restaurant-"+id).submit();
            });
        }
</script>
<script>
    @if (Session::has('msg'))

        bootbox.alert("{{ Session::get('msg') }}");

    @endif
</script>
<div class="table-responsive">
<table class="table table-responsive" id="restaurant-table">
    <thead>
        <th>No</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Description</th>
        <th>Belong to user</th>
        <th ></th>
        <th ></th>
    </thead>
    <tbody>
    @foreach($restaurants as $restaurant)
        <tr>
            <td>{{$i++}}</td>
            <td>{{ $restaurant['name'] }}</td>
            <td>{{ $restaurant['phone']}}</td>
            <td>{{ $restaurant['email']}}</td>
            <td>{{ $restaurant['address']}}</td>
            <td>{{ $restaurant['description']}}</td>
            <td>
                <a href="{{route('user.show',$restaurant['owner']['id'])}}"><strong>{{ $restaurant['owner']['name']}}</strong>
                </a>
            </td>
            <!-- <td class="text-right" width="3%">
                <a class="btn btn-primary" href="{{ route('restaurant.show',$restaurant['id']) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
            </td> -->
            <td class="text-right" width="3%">
                <a href="{{ route('restaurant.edit',$restaurant['id'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
            </td>
            <td class="text-right" width="3%">
                <a onclick="confirmDelete({{$restaurant['id']}});" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                    <form id="delete-restaurant-{{$restaurant['id']}}" style="display:none;" role="form" action="{{ route('restaurant.destroy', $restaurant['id']) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
        
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
