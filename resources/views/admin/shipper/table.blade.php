<script>
        function confirmDelete(id){
            bootbox.confirm("Are you sure?", function(result) {
                if(result) $("#delete-shipper-"+id).submit();
            });
        }
</script>
<script>
    @if (Session::has('msg'))

        bootbox.alert("{{ Session::get('msg') }}");

    @endif
</script>
<div class="table-responsive">
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
            <td class="text-right" width="3%">
                <a href="{{ route('shipper.edit',$shipper['id'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
            </td>
            <td class="text-right" width="3%">
                <a onclick="confirmDelete({{$shipper['id']}});" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                    <form id="delete-shipper-{{$shipper['id']}}" style="display:none;" role="form" action="{{ route('shipper.destroy', $shipper['id']) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
        
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
