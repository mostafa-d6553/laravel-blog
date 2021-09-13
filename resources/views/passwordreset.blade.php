<x-app-layout>

<x-slot name='title'>
    - password reset
</x-slot>

<div class="container col-6">
<form method="POST" action="{{ route('password.email') }}">

      @csrf

      <h2 class="text-center mb-4">بازیابی رمز عبور</h2>

      <div class="form-outline mb-4 form-floating">
        <input type="text" name="email" id="registerName" class="form-control" />
        <label class="form-label" for="registerName">ایمیل</label>
        @error('email')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

        <div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" class="btn btn-outline-primary mb-3 mt-3 btn-lg" type="button">بازیابی</button>

  <div class="sign-page__footer">
                        <span>کاربر جدید هستید؟</span>
                        <a href="{{ route('register') }}" class="color--46b2f0">صفحه ثبت نام</a>

                    </div>
</div>
</x-app-layout>
