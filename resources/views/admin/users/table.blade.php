<table class="table">
    <thead>
        <th>Users Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Email</th>
        <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->id !!}</td>
			<td>{!! $user->name !!}</td>
			<td>{!! $user->last_name !!}</td>
			<td>{!! $user->email !!}</td>
            <td>

                @can('update', $user)
                    <a href="{!! route('admin.users.edit', [$user->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('users.delete', [$user->id]) !!}" onclick="return confirm('Are you sure wants to delete this user?')"><i class="glyphicon glyphicon-remove"></i></a>
                @else
                    <a href="#">Report</a>
                @endcan

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
