<x-panel-layout>

<x-slot name='title'>
    - Create user
</x-slot>

<div class="container col-6">
<form method="POST" action="{{ route('users.store') }}">

      @csrf

      <h2 class="text-center my-4">Create User</h2>

      <div class="form-outline mb-4 form-floating">
        <input type="text" name="name" id="registerName" class="form-control" />
        <label class="form-label" for="registerName">نام  و نام خانوادگی</label>
        @error('name')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

      <div class="form-outline mb-4 form-floating">
        <input type="tel" name="phone" id="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername">شماره موبایل</label>
        @error('phone')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

      <div class="form-outline mb-4 form-floating">
        <input type="email" name="email" id="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail">ایمیل</label>
        @error('email')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

      <div class="form-outline mb-4 form-floating">
        <input type="password" name="password" id="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword">رمز عبور</label>
        @error('password')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

      <div class="form-outline mb-4 form-floating">
        <input type="password" name="password_confirmation" id="registerRepeatPassword" class="form-control" />
        <label class="form-label" for="registerRepeatPassword">تکرار رمز عبور</label>
        @error('password_confirmation')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

        <select class="form-select mb-3" aria-label="Default select example" name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="author">Author</option>
        </select>


      <button type="submit" class="btn btn-primary btn-block mb-3 btn-lg">ثبت نام</button>
    </form>

    </div>

</x-panel-layout>