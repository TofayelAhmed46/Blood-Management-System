<x-backend.layouts.master>
    <form action="{{ route('roles.store')}}" method="POST">
        @CSRF
        <label for="role_name">Role Name</label>
        <input type="text" name="role_name">
        <button type="submit">Save</button>
    </form>
</x-backend.layouts.master>