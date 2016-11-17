<script>
        function confirmDelete(id){
            bootbox.confirm("Are you sure?", function(result) {
                if(result) $("#delete-user-"+id).submit();
            });
        }
</script>
<script>
    @if (Session::has('msg'))

        bootbox.alert("{{ Session::get('msg') }}");

    @endif
</script>
<div class="table-responsive">
<table class="table table-responsive table-hover" id="users-table">
    <thead>
        <th>No</th>
        <th>{{ trans('user.name') }}</th>
        <th>{{ trans('user.email') }}</th>
        <th>{{ trans('user.role') }}</th>
        <th>{{ trans('user.avatar') }}</th>
        <th></th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
    @foreach($users as $user)
        
        <tr>
            <td>{{$i++}}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><label class="label label-success">{{ $user->user_access_level === 0 ? "User" : "Admin" }}</label></td>
            <td><span><img src="{{url('/')}}/uploads/images/{{ $user->avatar }}" width="80px" height="50px"></span></td>
            <td class="text-right" width="3%">
                <a class="btn btn-primary" href="{{ route('user.show',$user->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
            </td>
            <td class="text-right" width="3%">
                <a href="{{ route('user.edit',$user->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
            </td>
            <td class="text-right" width="3%">
                <a onclick="confirmDelete({{$user->id}});" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                    <form id="delete-user-{{$user->id}}" style="display:none;" role="form" action="{{ route('user.destroy', $user->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
        
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
