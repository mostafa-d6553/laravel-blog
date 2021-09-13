<x-app-layout>

<x-slot name='title'>
    - login
</x-slot>

<div class="container col-6">
<form method="POST" action="{{ route('login.store') }}">

      @csrf

      <h2 class="text-center mb-4">ورود</h2>

      <div class="form-outline mb-4 form-floating">
        <input type="text" name="email" id="registerName" class="form-control" />
        <label class="form-label" for="registerName">شماره یا ایمیل</label>
        @error('email')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

      <div class="form-outline mb-4 form-floating">
        <input type="password" name="password" id="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername">رمز عبور</label>
        @error('password')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

      <label class="checkbox text--right">
        <input type="checkbox" name="remember" class="checkbox__filter">
        <span class="checkbox__mark position-relative"></span>
        مرا بخاطر بسپار
      </label>

        

        <div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" class="btn btn-outline-primary mb-3 mt-3 btn-lg" type="button">ورود به سایت</button>
</div>

        <a class="text-decoration-none link-dark d-block mb-3" href="{{ route('reset-pass') }}">بازیابی رمز عبور</a>


        <div class="sign-page__footer">
             <span>کاربر جدید هستید؟</span>
            <a href="{{ route('register') }}" class="text-decoration-none link-info">صفحه ثبت نام</a>
        </div>

    </form>

    </div>

  </div>
</div>



</x-app-layout>
