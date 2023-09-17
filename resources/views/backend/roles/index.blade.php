<x-backend.layouts.master>
    <table style="width: 100%; border-collapse: collapse" border="1">
        <thead>
            <tr>
                <th colspan="3"><h3>Role</h3></th>
            </tr>
            <tr>
                <th colspan="3" style="text-align: right">
                    <button><a href="">Add New Role</a></button>
                    <button><a href="{{ route('roles.create')}}">Add New Role</a></button>
                </th>
            </tr>
            <tr>
                <th>Ser No</th>
                <th>Role Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sl=1
            @endphp
            @foreach ($roles as $role)
            <tr>
                <td>{{$sl++}}</td>
                <td>{{$role->role_name}}</td>
                <td>
                    <a href="">Show</a>
                    <a href="">Edit</a>
                    <a href="{{ route('roles.show', $role->id)}}">Show</a>
                    <a href="{{ route('roles.edit', $role->id)}}">Edit</a>
                    <button>Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-backend.layouts.master>