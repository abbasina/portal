@extends('layouts.master')
@section('styles')
<link rel="stylesheet" href="/css/pages/contact-us.css" />
@endsection
@section('pageTitle')
ارتباط با ما
@endsection
@section('content')
<main class="container">
  <h1 class="main-title">ارتباط با ما</h1>
  <div class="brudcrumbs my-3">
    <ul>
      <li>
        <a href="#">صفحه اصلی</a>
      </li>
      <li>
        <span> / </span>
      </li>
      <li>
        <a href="#">ارتباط با ما </a>
      </li>
    </ul>
  </div>
  <section class="mb-3">
    <div class="card mt-5">
      <div class="row row-cols-1 row-cols-lg-3 gy-5">
        <div class="col">
          <div class="contact-us">
            <img
              src="./img/location-big.svg"
              alt="Image"
              loading="lazy"
              class="img-fluid"
            />
            <h5 class="fw-bold mt-3 fs-16">آدرس</h5>
            <p class="address">
              نشانی: تهران ، میدان ونک ، خیابان محمدباقر خدامی ، پلاک ۳۴
            </p>
          </div>
        </div>
        <div class="col">
          <div class="contact-us">
            <img
              src="./img/tel-big.svg"
              alt="Image"
              loading="lazy"
              class="img-fluid"
            />
            <h5 class="fw-bold mt-3 fs-16">تلفن</h5>
            <p>
              ۰۲۱-۹۶۰۱۵۳۳۸ ۰۲۱-۹۶۰۱۵۳۸۰
              <span class="d-block">فکس: ۹۶۰۹۰۳۳۱-۰۲۱</span>
            </p>
          </div>
        </div>
        <div class="col">
          <div class="contact-us">
            <img
              src="./img/envelope-big.svg"
              alt="Image"
              loading="lazy"
              class="img-fluid"
            />
            <h5 class="fw-bold mt-3 fs-16">ایمیل</h5>
            <p>iranmbcir@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="card-body map-container">
        <div id="map"></div>
      </div>
    </div>
  </section>
  <section class="mb-3">
    <div class="card" id="contact-us">
      <div class="row">
        <div class="col-12 col-lg-3">
          <h5 class="title">
            <span class="logo-svg"></span>
            فرم تماس
          </h5>
          <p class="ms-5 lh-lg">
            کاربران گرامی، شما می توانید از طریق فرم زیر تمامی نقطه نظرات
            انتقادات و پیشنهادات خود را برای ما ارسال کنید
          </p>
        </div>
        <div class="col-12 col-lg-9">
          <div class="card-body">
            <form action="">
              <div class="row row-cols-1 row-cols-lg-2 g-3">
                <div class="col">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="نام و نام خانوادگی"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="ایمیل"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="واحد مربوطه"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="شماره تماس"
                  />
                </div>
                <div class="col-12 col-lg-12">
                  <textarea
                    cols="30"
                    rows="4"
                    class="form-control form-control-lg"
                    placeholder="متن پیام"
                  ></textarea>
                </div>
              </div>
              <div class="float-end mb-3">
                <button class="btn btn-lg btn-green mt-3 send">
                  ارسال
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

  