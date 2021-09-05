<x-app-layout>

<x-slot name='title'>
    - register
</x-slot>

<div class="container col-6">
<form method="POST" action="{{ route('register.store') }}">

      @csrf

      <div class="text-center mb-3">
        <h2 class="mb-4">Sign up with:</h2>
        <button type="button" class="btn btn-primary btn-floating mx-1">
          <a href="https://github.com/mostafa-d6553" class="text-decoratin-none text-white"><i class="fab fa-instagram"></i></a>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-github"></i>
        </button>
      </div>

      <h2 class="text-center mb-4">or:</h2>

      <div class="form-outline mb-4 form-floating">
        <input type="text" name="name" id="registerName" class="form-control" />
        <label class="form-label" for="registerName">نام  و نام خانوادگی</label>
        @error('name')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

      <div class="form-outline mb-4 form-floating">
        <input type="text" name="phone" id="registerUsername" class="form-control" />
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


      <button type="submit" class="btn btn-primary btn-block mb-3 btn-lg">ثبت نام</button>
    </form>

    </div>

  </div>
</div>
</x-app-layout>
