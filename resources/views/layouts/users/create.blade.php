@extends('layouts.master')
@section('pageTitle')
تغییر رمز عبور
@endsection
@section('content')
<main class="container">
  <h1 class="main-title">حساب کاربری</h1>
  <div class="brudcrumbs my-3">
      <ul >
          <li>
              <a href="#">صفحه اصلی</a>
          </li>
          <li>
              <span> / </span>
          </li>
          <li>
              <a href="#"> حساب کاربری </a>
          </li>

      </ul>
  </div>
  <section class="mb-3">
      <div class="row g-3">
        <div class="col-12 col-lg-3">
          <div class="card">
              <div class="card-body">
                  <div class="row row-cols-auto">
                      <div class="col">

                          <img src="/img/user-big.svg" alt="Image" loading="lazy" class="img-fluid">
                      </div>
                      <div class="col">

                          <h5 class="fw-bold mt-3 fs-16">حسین باقری:</h5>
                          <p>خوش آمدید</p>
                      </div>
                  </div>
                  <ul class="list-group mt-3 only-bottom-border">
                      <li class="list-group-item">
                          <a href="/account.html">پروفایل من</a>
                      </li>
                      <li class="list-group-item">
                          <a href="/docs.html">اسناد</a>
                      </li>
                      <li class="list-group-item active">
                          <a href="/change-password.html">تغییر رمزعبور</a>
                      </li>
                      <li class="list-group-item">
                          <a href="#">خروج</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
          <div class="col-12 col-lg-9">
              <div class="card">
                  <div class="card-body">
                      <p class="mb-4 text-muted">کاربر گرامی، ابتدا رمز فعلی و پس از آن رمز جدید خود را وارد کنید</p>
                      <form action="" class="w-lg-50 mb-4">

                      <div class="mb-3 bg-white rounded-12 border">
                          <div class="input-group input-group-sm">
                            <input type="password" class="form-control border-0 py-3" placeholder="رمزعبور فعلی">
                            <span class="input-group-text border-0 me-2" style="border-radius: 12px;" onclick="showPassword(this)">
                                <span role="button" class="eye-svg" style="padding:1rem;"></span>
                              </span>
                        </div>
                      </div>
                      <div class="mb-3 bg-white rounded-12 border">
                          <div class="input-group input-group-sm">
                            <input type="password" class="form-control border-0 py-3" placeholder="رمزعبور جدید">
                            <span class="input-group-text border-0 me-2" style="border-radius: 12px;" onclick="showPassword(this)">
                                <span role="button" class="eye-svg" style="padding:1rem;"></span>
                              </span>
                        </div>
                      </div>
                      <div class="mb-3 bg-white rounded-12 border">
                          <div class="input-group input-group-sm">
                            <input type="password" class="form-control border-0 py-3" placeholder="تکرار رمزعبور جدید">
                            <span class="input-group-text border-0 me-2" style="border-radius: 12px;" onclick="showPassword(this)">
                                <span role="button" class="eye-svg" style="padding:1rem;"></span>
                              </span>
                        </div>
                      </div>
                      <button class="w-100 btn btn-lg btn-green py-3">تغییر رمز</button>
                  </form>
                      
                  </div>
              </div>
          </div>
      </div>
  </section>

</main>@endsection

 