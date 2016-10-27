<table class="table table-responsive" id="users-table">
    <thead>
        <th>{{ trans('user.id') }}</th>
        <th>{{ trans('user.name') }}</th>
        <th>{{ trans('user.email') }}</th>
        <th>{{ trans('user.role') }}</th>
        <th>{{ trans('user.avatar') }}</th>
        <th>{{ trans('user.action') }}</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role === 0 ? "User" : "Admin" }} </td>
            <td><span></span><img src="{{ Request::root() }}/uploads/images/{!! $user->avatar !!}" width="80px" height="50px"></span></td>
            <td>
                {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('user.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('user.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
