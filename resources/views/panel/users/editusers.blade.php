<x-panel-layout>

<x-slot name='title'>
    - Edit user
</x-slot>


<div class="container col-6">
<form method="POST" action="{{ route('users.update', $user->id) }}">
      @csrf
      @method('put')

      <h2 class="text-center my-4">Edit User</h2>

    

        <select class="form-select mb-3" aria-label="Default select example" name="role-select">
            <option value="user" @if($user->role === 'user') selected @endif >User</option>
            <option value="admin" @if($user->role === 'admin') selected @endif>Admin</option>
            <option value="author" @if($user->role === 'author') selected @endif>Author</option>
        </select>


      <button type="submit" class="btn btn-primary btn-block mb-3 btn-lg">ویرایش</button>
    </form>

    </div>


</x-panel-layout>