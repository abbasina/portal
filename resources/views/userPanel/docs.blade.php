@extends('layouts.master')
@section('pageTitle')
اسناد من
@endsection
@section('content')
<main class="container">
  <h1 class='main-title'>حساب کاربری</h1>
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
        <div class="col-12 col-lg-3">
          <div class="card">
              <div class="card-body">
                  <div class="row row-cols-auto">
                      <div class="col">

                          <img src="./img/user-big.svg" alt="Image" loading="lazy" class="img-fluid">
                      </div>
                      <div class="col">

                          <h5 class="fw-bold mt-3 fs-16">حسین باقری:</h5>
                          <p>خوش آمدید</p>
                      </div>
                  </div>
                  <ul class="list-group mt-3 only-bottom-border">
                      <li class="list-group-item">
                          <a href="./account.html">پروفایل من</a>
                      </li>
                      <li class="list-group-item active">
                          <a href="./docs.html">اسناد</a>
                      </li>
                      <li class="list-group-item">
                          <a href="./change-password.html">تغییر رمزعبور</a>
                      </li>
                      <li class="list-group-item">
                          <a href="#">خروج</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
          <div class="col-12 col-lg-9">
              <div class="card mb-3">
                  <div class="card-body">
                  <div class="row my-4">
                    <div class="col-md-4">
                      <img
                        src="./img/blog-1.png"
                        class="card-img-right"
                        alt="Image"
                        loading="lazy"
                      />
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title my-3 fw-bold">
                          حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                        </h5>
                        <p class="card-text">
                          رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                          حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                          حادثه پلاسکو تقدیم خانواده‌هایشان شد
                        </p>
                        <p class="card-text">
                        
                          <span class="text-muted border-end px-2">1400/11/04</span>
                          <span class="text-muted border-end px-2 ms-2">10:45</span>
                          <span class="text-muted ms-2"> نوع فایل: عکس </span>
                        </p>
                        <button class="btn btn-light-green download">
                            <span class="download-svg"></span>
                            دانلود فایل
                        </button>
                      </div>
                  </div>
                  <hr>

                  <div class="row my-4">
                      <div class="col-md-4">
                        <img
                          src="./img/blog-1.png"
                          class="card-img-right"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>
                      <div class="col-md-8">
                          <h5 class="card-title my-3 fw-bold">
                            حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </h5>
                          <p class="card-text">
                            رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                            حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                            حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </p>
                          <p class="card-text">
                          
                            <span class="text-muted border-end px-2">1400/11/04</span>
                            <span class="text-muted border-end px-2 ms-2">10:45</span>
                            <span class="text-muted ms-2"> نوع فایل: عکس </span>
                          </p>
                          <button class="btn btn-light-green download">
                              <span class="download-svg"></span>
                              دانلود فایل
                          </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row my-4">
                      <div class="col-md-4">
                        <img
                          src="./img/blog-1.png"
                          class="card-img-right"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>
                      <div class="col-md-8">
                          <h5 class="card-title my-3 fw-bold">
                            حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </h5>
                          <p class="card-text">
                            رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                            حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                            حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </p>
                          <p class="card-text">
                          
                            <span class="text-muted border-end px-2">1400/11/04</span>
                            <span class="text-muted border-end px-2 ms-2">10:45</span>
                            <span class="text-muted ms-2"> نوع فایل: عکس </span>
                          </p>
                          <button class="btn btn-light-green download">
                              <span class="download-svg"></span>
                              دانلود فایل
                          </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row my-4">
                      <div class="col-md-4">
                        <img
                          src="./img/blog-1.png"
                          class="card-img-right"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>
                      <div class="col-md-8">
                          <h5 class="card-title my-3 fw-bold">
                            حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </h5>
                          <p class="card-text">
                            رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                            حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                            حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </p>
                          <p class="card-text">
                          
                            <span class="text-muted border-end px-2">1400/11/04</span>
                            <span class="text-muted border-end px-2 ms-2">10:45</span>
                            <span class="text-muted ms-2"> نوع فایل: عکس </span>
                          </p>
                          <button class="btn btn-light-green download">
                              <span class="download-svg"></span>
                              دانلود فایل
                          </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row my-4">
                      <div class="col-md-4">
                        <img
                          src="./img/blog-1.png"
                          class="card-img-right"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>
                      <div class="col-md-8">
                          <h5 class="card-title my-3 fw-bold">
                            حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </h5>
                          <p class="card-text">
                            رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                            حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                            حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </p>
                          <p class="card-text">
                          
                            <span class="text-muted border-end px-2">1400/11/04</span>
                            <span class="text-muted border-end px-2 ms-2">10:45</span>
                            <span class="text-muted ms-2"> نوع فایل: عکس </span>
                          </p>
                          <button class="btn btn-light-green download">
                              <span class="download-svg"></span>
                              دانلود فایل
                          </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row my-4">
                      <div class="col-md-4">
                        <img
                          src="./img/blog-1.png"
                          class="card-img-right"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>
                      <div class="col-md-8">
                          <h5 class="card-title my-3 fw-bold">
                            حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </h5>
                          <p class="card-text">
                            رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                            حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                            حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </p>
                          <p class="card-text">
                          
                            <span class="text-muted border-end px-2">1400/11/04</span>
                            <span class="text-muted border-end px-2 ms-2">10:45</span>
                            <span class="text-muted ms-2"> نوع فایل: عکس </span>
                          </p>
                          <button class="btn btn-light-green download">
                              <span class="download-svg"></span>
                              دانلود فایل
                          </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row my-4">
                      <div class="col-md-4">
                        <img
                          src="./img/blog-1.png"
                          class="card-img-right"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>
                      <div class="col-md-8">
                          <h5 class="card-title my-3 fw-bold">
                            حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </h5>
                          <p class="card-text">
                            رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                            حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                            حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </p>
                          <p class="card-text">
                          
                            <span class="text-muted border-end px-2">1400/11/04</span>
                            <span class="text-muted border-end px-2 ms-2">10:45</span>
                            <span class="text-muted ms-2"> نوع فایل: عکس </span>
                          </p>
                          <button class="btn btn-light-green download">
                              <span class="download-svg"></span>
                              دانلود فایل
                          </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row my-4">
                      <div class="col-md-4">
                        <img
                          src="./img/blog-1.png"
                          class="card-img-right"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>
                      <div class="col-md-8">
                          <h5 class="card-title my-3 fw-bold">
                            حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </h5>
                          <p class="card-text">
                            رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                            حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                            حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </p>
                          <p class="card-text">
                          
                            <span class="text-muted border-end px-2">1400/11/04</span>
                            <span class="text-muted border-end px-2 ms-2">10:45</span>
                            <span class="text-muted ms-2"> نوع فایل: عکس </span>
                          </p>
                          <button class="btn btn-light-green download">
                              <span class="download-svg"></span>
                              دانلود فایل
                          </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row my-4">
                      <div class="col-md-4">
                        <img
                          src="./img/blog-1.png"
                          class="card-img-right"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>
                      <div class="col-md-8">
                          <h5 class="card-title my-3 fw-bold">
                            حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </h5>
                          <p class="card-text">
                            رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                            حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                            حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </p>
                          <p class="card-text">
                          
                            <span class="text-muted border-end px-2">1400/11/04</span>
                            <span class="text-muted border-end px-2 ms-2">10:45</span>
                            <span class="text-muted ms-2"> نوع فایل: عکس </span>
                          </p>
                          <button class="btn btn-light-green download">
                              <span class="download-svg"></span>
                              دانلود فایل
                          </button>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-4">
                      <div class="col-md-4">
                        <img
                          src="./img/blog-1.png"
                          class="card-img-right"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>
                      <div class="col-md-8">
                          <h5 class="card-title my-3 fw-bold">
                            حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </h5>
                          <p class="card-text">
                            رئیس بنیاد شهید و امور ایثارگران با بیان اینکه آتش‌نشانان
                            حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم شهادت ۱۶ آتش‌نشان
                            حادثه پلاسکو تقدیم خانواده‌هایشان شد
                          </p>
                          <p class="card-text">
                          
                            <span class="text-muted border-end px-2">1400/11/04</span>
                            <span class="text-muted border-end px-2 ms-2">10:45</span>
                            <span class="text-muted ms-2"> نوع فایل: عکس </span>
                          </p>
                          <button class="btn btn-light-green download">
                              <span class="download-svg"></span>
                              دانلود فایل
                          </button>
                        </div>
                    </div>
              </div>

                </div>
                <nav aria-label="Page navigation example" class="my-5">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true" class="angle-right-svg"></span>
                      </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#" aria-current="page">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item" style="line-height: 40px;">...</li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true" class="angle-left-svg"></span>
                      </a>
                    </li>
                  </ul>
                </nav>
          </div>
      </div>
  </section>

</main>@endsection

 