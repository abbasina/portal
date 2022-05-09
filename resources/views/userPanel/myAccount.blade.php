@extends('layouts.master')
@section('pageTitle')
حساب کاربری من
@endsection
@section('content')
<main class="container my-5">
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
              <a href="#">حساب کاربری </a>
          </li>

      </ul>
  </div>
  <section class="mb-3">
      <div class="row g-3">
            @include('userpanel.dashboard')
          <div class="col-12 col-lg-9">
              <div class="card">
                  <div class="card-body">
                      <h5 class="fw-bold mt-5 fs-16">اطلاعات کاربری</h5>

                      <table class="table table-striped with-padding"> 
                          <tbody>
                              <tr>
                                  <td>کد ملی</td>
                                  <td class="text-end">1234567890</td>
                              </tr>
                              <tr>
                                  <td>ایمیل</td>
                                  <td class="text-end">sample@sample.com
                                  </td>
                              </tr>
                              <tr>
                                  <td>شماره تلفن همراه</td>
                                  <td class="text-end">۰۹۱۲۱۲۳۴۵۶۷
                                  </td>
                              </tr>
                              <tr>
                                  <td>کد معرف</td>
                                  <td class="text-end">2368
                                  </td>
                              </tr>
                              <tr>
                                  <td>نوع کاربری</td>
                                  <td class="text-end">خبرنگار
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </section>

</main>
@endsection

 