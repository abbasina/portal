@extends('layouts.master')
@section('pageTitle')
کمیسیون
@endsection
@section('content')
<main class="container">
  <h1 class="main-title">کمیسیون حمل و نقل و ترافیک</h1>
  <div class="brudcrumbs my-3">
    <ul>
      <li>
        <a href="#">صفحه اصلی</a>
      </li>
      <li>
        <span> / </span>
      </li>
      <li>
        <a href="#">معرفی کمیسیون ها </a>
      </li>
      <li>
        <span> / </span>
      </li>
      <li>
        <a href="#"> کمیسیون حمل و نقل و ترافیک</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <article class="col-12 col-lg-8">
      <div class="card mb-3">
        <h5 class="title">
          <span class="logo-svg"></span>
          معرفی کمیسیون
        </h5>
        <div class="card-body">
          <p class="lh-lg">
            لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به
            عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل
            ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر
            گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا
            طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی
            استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که
            صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد
            چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته
            شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه
            رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی
            وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه
            گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را
            به پایان برند
          </p>
        </div>
      </div>
      <div class="card mb-20">
        <h5 class="title">
          <span class="logo-svg"></span>
          رییس کمیسیون
        </h5>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-lg-9 order-2 order-lg-1">
              <ul class="green-list">
                <li>
                  <span class="fw-bold">نام و نام خانوادگی: </span>
                  مجتبی فیلسوف زاده
                </li>
                <li>
                  <span class="fw-bold">بیوگرافی: </span>
                  <p class="lh-xl">
                    لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت
                    چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک
                    از این متن به عنوان عنصری از ترکیب بندی برای پر کردن
                    صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده
                    استفاده می نماید
                  </p>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-3 order-1 order-lg-2">
              <img
                src="./img/comision-single.png"
                alt="Image"
                loading="lazy"
                class="img-fluid w-100"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-20">
        <h5 class="title">
          <span class="logo-svg"></span>
          دبیر کمیسیون
        </h5>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-lg-9 order-2 order-lg-1">
              <ul class="green-list">
                <li>
                  <span class="fw-bold">نام و نام خانوادگی: </span>
                  مجتبی فیلسوف زاده
                </li>
                <li>
                  <span class="fw-bold">بیوگرافی: </span>
                  <p class="lh-xl">
                    لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت
                    چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک
                    از این متن به عنوان عنصری از ترکیب بندی برای پر کردن
                    صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده
                    استفاده می نماید
                  </p>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-3 order-1 order-lg-2">
              <img
                src="./img/comision-single.png"
                alt="Image"
                loading="lazy"
                class="img-fluid w-100"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="d-flex justify-content-between">
          <h5 class="title">
            <span class="logo-svg"></span>
            کمیته ها
          </h5>
          <div class="pe-30 mt-5">
            <!-- If we need navigation buttons -->
            <div class="swiper-button-next static"></div>
            <div class="swiper-button-prev static"></div>
          </div>
        </div>
        <div class="card-body">
          <!-- Slider main container -->
          <div class="swiper" data-swiper-slides="4">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <a href="#">
                  <img
                    src="./img/comite.svg"
                    alt="Image"
                    loading="lazy"
                    class="img-fluid w-100"
                  />
                  <div class="mt-3 text-center">
                    <p>کمیته تاکسیرانی</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#">
                  <img
                    src="./img/comite.svg"
                    alt="Image"
                    loading="lazy"
                    class="img-fluid w-100"
                  />
                  <div class="mt-3 text-center">
                    <p>کمیته تاکسیرانی</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#">
                  <img
                    src="./img/comite.svg"
                    alt="Image"
                    loading="lazy"
                    class="img-fluid w-100"
                  />
                  <div class="mt-3 text-center">
                    <p>کمیته تاکسیرانی</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#">
                  <img
                    src="./img/comite.svg"
                    alt="Image"
                    loading="lazy"
                    class="img-fluid w-100"
                  />
                  <div class="mt-3 text-center">
                    <p>کمیته تاکسیرانی</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
    <aside class="col-12 col-lg-4">
      <!-- Top views -->
      <div class="card mb-3">
        <h5 class="title">
          <span class="logo-svg"></span>
          پربازدیدها
        </h5>
        <div class="card-body pt-sm-none">
          <ul class="green-list">
            <li class="fw-bold fs-14">
              <a href="#">
                حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
              </a>
              <p class="date">1400/11/04</p>
            </li>
            <li class="fw-bold fs-14">
              <a href="#"> ریزعلی متروی تهران کیست؟ </a>

              <p class="date">1400/11/04</p>
            </li>
            <li class="fw-bold fs-14">
              <a href="#">
                جزئیات کمک مدیریت بحران تهران در مناطق سیل‌زده
              </a>
              <p class="date">1400/11/04</p>
            </li>
            <li class="fw-bold fs-14">
              <a href="#">
                لزوم تخصیص ۱۰درصد از یارانه‌خودروهای سواری به حمل و نقل پاک
              </a>

              <p class="date">1400/11/04</p>
            </li>
            <li class="fw-bold fs-14">
              <a href="#">
                بازداشت رئیس اداره بازیافت یکی از مناطق تهران
              </a>

              <p class="date">1400/11/04</p>
            </li>
          </ul>
        </div>
      </div>
    </aside>
         <!-- Comisions -->
         <section class="mb-30">
          <div class="card d-none d-lg-flex">
            <div class="text-center">
              <span class="logo-rotate-svg"></span>
              <h5
                class="fw-bold fs-20"
                style="margin-top: 8px; margin-bottom: 0"
              >
                معرفی کمیسیون ها
              </h5>
            </div>
            <div class="card-body p-30">
              <!-- Slider main container -->
              <div id="comisions-slider" class="swiper" data-swiper-slides="3">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <a href="#">
                      <div class="img-full-shadow"></div>
                      <div class="img-highlight"></div>

                      <img
                        src="./img/comision-1.png"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100 h-100"
                      />
                      <p
                        class="abs-bottom-right fs-14 fw-bold text-white ms-20 mb-15"
                      >
                        کمیسیون حقوقی
                      </p>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">
                      <div class="img-full-shadow"></div>
                      <div class="img-highlight"></div>

                      <img
                        src="./img/comision-2.png"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100 h-100"
                      />
                      <p
                        class="abs-bottom-right fs-14 fw-bold text-white ms-20 mb-15"
                      >
                        کمیسیون سرمایه گذاری و مشارکت ها
                      </p>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">
                      <div class="img-full-shadow"></div>
                      <div class="img-highlight"></div>

                      <img
                        src="./img/comision-3.png"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100 h-100"
                      />
                      <p
                        class="abs-bottom-right fs-14 fw-bold text-white ms-20 mb-15"
                      >
                        کمیسیون شهرسازی و معماری
                      </p>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev button"></div>
            <div class="swiper-button-next button"></div>
          </div>
          <div class="card d-flex d-lg-none">
            <div class="text-center">
              <span class="logo-rotate-svg"></span>
              <h5
                class="fw-bold fs-20"
                style="margin-top: 8px; margin-bottom: 0"
              >
                معرفی کمیسیون ها
              </h5>
            </div>
            <div class="card-body p-30">
              <!-- Slider main container -->
               <!-- Slider main container -->
               <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <a href="#">
                      <div class="img-full-shadow"></div>
                      <div class="img-highlight"></div>

                      <img
                        src="./img/comision-1.png"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100 h-100"
                      />
                      <p
                        class="abs-bottom-right fs-14 fw-bold text-white ms-20 mb-15"
                      >
                        کمیسیون حقوقی
                      </p>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">
                      <div class="img-full-shadow"></div>
                      <div class="img-highlight"></div>

                      <img
                        src="./img/comision-2.png"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100 h-100"
                      />
                      <p
                        class="abs-bottom-right fs-14 fw-bold text-white ms-20 mb-15"
                      >
                        کمیسیون سرمایه گذاری و مشارکت ها
                      </p>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">
                      <div class="img-full-shadow"></div>
                      <div class="img-highlight"></div>

                      <img
                        src="./img/comision-3.png"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100 h-100"
                      />
                      <p
                        class="abs-bottom-right fs-14 fw-bold text-white ms-20 mb-15"
                      >
                        کمیسیون شهرسازی و معماری
                      </p>
                    </a>
                  </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination-main mt-3" style="position: initial;"></div>
              </div>
            </div>

          </div>
        </section>
  </div>
</main>
@endsection

