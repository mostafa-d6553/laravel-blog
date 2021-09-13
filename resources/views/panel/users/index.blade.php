<x-panel-layout>

<x-slot name='title'>
    - Users manager
</x-slot>

<div class="container mt-5 text-center">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">نام و نام خانوادگی</th>
      <th scope="col">ایمیل</th>
      <th scope="col">موبایل</th>
      <th scope="col">سطح دسترسی</th>
      <th scope="col">تاریخ عضویت</th>
      <th scope="col">اپراتور</th>
    </tr>
  </thead>

  <tbody>
    @foreach($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->role }}</td>
        <td>{{ $user->DateInvert() }}</td>
        <td>
        @if( $user->role !== 'admin')
        <a href="{{ route('users.destroy',$user->id ) }}" onclick="userDestroy(event , '{{ $user->id }}' )" class="text-white text-decoration-none"><i class="fas fa-trash mx-2"></i></a>
         @endif
        <a href="{{ route('users.edit',$user->id ) }}" class="text-white text-decoration-none"><i class="fas fa-pencil-alt mx-2"></i></a>
          <form action="{{ route('users.destroy',$user->id ) }}" method="POST" id="user-{{ $user->id }}-delete">
            @csrf
            @method('delete')

          </form>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>

{{ $users->links() }}

<button class="btn btn-primary btn-lg"><a href="{{ route('users.create') }}" class="text-white text-decoration-none fw-bold">Create User</a></button>
    </div>

    <x-slot name="scripts">
      <script>
          function userDestroy(event , id){
            event.preventDefault();
            document.getElementById(`user-${id}-delete`).submit()
          }
      </script>
    </x-slot>
</x-panel-layout>