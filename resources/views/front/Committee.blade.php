@extends('layouts.master')
@section('pageTitle')
معرفی کمیته
@endsection
@section('content')
<main class="container my-5">
  <h1 class="main-title">کمیته تاکسیرانی</h1>
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
      <li>
        <a href="#"> کمیته تاکسیرانی </a>
      </li>
    </ul>
  </div>
  <div class="row">
    <article class="col-12 col-lg-8">
      <div class="card mb-20">
        <h5 class="title">
          <span class="logo-svg"></span>
          معرفی کمیته
        </h5>
        <div class="card-body">
          <p class="lh-xl">
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
          رییس کمیته
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
          دبیر کمیته
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
        <div class="d-flex justify-content-between mt-30">
          <h5 class="fw-bold fs-20">
            <span class="logo-svg"></span>
            زیر کمیته
          </h5>
         <div class="pe-30">
            <!-- If we need navigation buttons -->
            <div class="swiper-button-next static"></div>
            <div class="swiper-button-prev static"></div>
         </div>
        </div>

        <div class="card-body">
          <!-- Slider main container -->
          <div class="swiper" data-slides="4">
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
      <div class="card mb-20">
        <div class="d-flex justify-content-between mt-5">
          <h5 class="fw-bold fs-20">
            <span class="logo-svg"></span>
            اخبار مرتبط
          </h5>
          <a href="#" class="text-gray me-3"
            >مشاهده آرشیو <span class="angle-left-svg"></span
          ></a>
        </div>
        <div class="card-body">
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

         <!-- News -->
         <div class="card mb-20">
          <div class="d-flex justify-content-between mt-30">
            <h5 class="fw-bold fs-20"><span class="logo-svg"></span>عکس</h5>
          </div>
          <div class="card-body">
            <div
              id="carouselNews"
              class="carousel slide rounded-12"
              data-bs-ride="carousel"
            >
              <div class="carousel-indicators outsider">
                <button
                  type="button"
                  data-bs-target="#carouselNews"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselNews"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselNews"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselNews"
                  data-bs-slide-to="3"
                  aria-label="Slide 4"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./img/news.svg"
                    class="img-fluid w-100"
                    alt="Image"
                    loading="lazy"
                  />
                  <p class="fw-bold fs-14 d-flex">
                    <span class="bg-svg"></span>نشست هم اندیشی شهردار تهران
                    با نخبگان منطقه ۱۰ تهران
                  </p>
                </div>
                <div class="carousel-item">
                  <img
                    src="./img/news.svg"
                    class="img-fluid w-100"
                    alt="Image"
                    loading="lazy"
                  />
                  <p class="fw-bold fs-14 d-flex">
                    <span class="bg-svg"></span>نشست هم اندیشی شهردار تهران
                    با نخبگان منطقه ۱۰ تهران
                  </p>
                </div>
                <div class="carousel-item">
                  <img
                    src="./img/news.svg"
                    class="img-fluid w-100"
                    alt="Image"
                    loading="lazy"
                  />
                  <p class="fw-bold fs-14 d-flex">
                    <span class="bg-svg"></span>نشست هم اندیشی شهردار تهران
                    با نخبگان منطقه ۱۰ تهران
                  </p>
                </div>
                <div class="carousel-item">
                  <img
                    src="./img/news.svg"
                    class="img-fluid w-100"
                    alt="Image"
                    loading="lazy"
                  />
                  <p class="fw-bold fs-14 d-flex">
                    <span class="bg-svg"></span>نشست هم اندیشی شهردار تهران
                    با نخبگان منطقه ۱۰ تهران
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

             <!-- Videos -->
             <div id="videos" class="card mb-3 d-none d-lg-flex">
              <div class="d-flex justify-content-between mt-5">
                <h5 class="fw-bold fs-20">
                  <span class="logo-svg"></span>
                  فیلم
                </h5>
                <a href="#" class="text-gray me-3"
                  >مشاهده آرشیو <span class="angle-left-svg"></span
                ></a>
              </div>
              <div class="card-body">
                <div class="card mb-3 border-0 shadow-none">
                  <a href="#">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <div class="rounded-img-10">

                        <img
                          src="./img/video-1.svg"
                          class="card-img-right card-img-right-sm"
                          alt="Image"
                          loading="lazy"
                        />
                      </div>

                      </div>
                      <div class="col-md-8">
                        <div class="card-body px-10">
                          <h5 class="card-title fw-bold fs-14 d-flex">شادی یک صعود</h5>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="card mb-3 border-0 shadow-none">
                  <a href="#">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <div class="rounded-img-10">

                        <img
                          src="./img/video-2.svg"
                          class="card-img-right card-img-right-sm"
                          alt="Image"
                          loading="lazy"
                        />
                        </div>

                      </div>
                      <div class="col-md-8">
                        <div class="card-body px-10">
                          <h5 class="card-title fw-bold fs-14 d-flex">
                            نمایشگاه تجهیزات تونل و فضاهای زیرزمینی مترو
                          </h5>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="card mb-3 border-0 shadow-none">
                  <a href="#">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <div class="rounded-img-10">

                        <img
                          src="./img/video-3.svg"
                          class="card-img-right card-img-right-sm"
                          alt="Image"
                          loading="lazy"
                        />
                        </div>

                      </div>
                      <div class="col-md-8">
                        <div class="card-body px-10">
                          <h5 class="card-title fw-bold fs-14 d-flex">
                            رونمایی واگن مخصوص بانوان و کودکان
                          </h5>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="card mb-3 border-0 shadow-none">
                  <a href="#">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <div class="rounded-img-10">

                        <img
                          src="./img/video-4.svg"
                          class="card-img-right card-img-right-sm"
                          alt="Image"
                          loading="lazy"
                        />
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body px-10">
                          <h5 class="card-title fw-bold fs-14 d-flex">
                            جشن میلاد حضرت زهرا (س) با حضور شهردار تهران
                          </h5>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <!-- Videos mobile -->
            <div class="card mb-3 d-flex d-lg-none">
              <div class="d-flex justify-content-between mt-5">
                <h5 class="fw-bold fs-20">
                  <span class="logo-svg"></span>
                  فیلم
                </h5>
                <a href="#" class="text-gray me-3"
                  >مشاهده آرشیو <span class="angle-left-svg"></span
                ></a>
              </div>
              <div class="card-body" style="padding: 1rem 30px">
                <!-- Slider main container -->
                <div id="notes-mobile-slider" class="swiper">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <div class="card mb-3 border-0 shadow-none">
                        <a href="#">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img
                                src="./img/video-1.svg"
                                class="card-img-right card-img-right-sm"
                                alt="Image"
                                loading="lazy"
                              />
                            </div>
                            <div class="col-md-8">
                              <div class="card-body px-10">
                                <h5 class="card-title fw-bold fs-14 d-flex">شادی یک صعود</h5>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card mb-3 border-0 shadow-none">
                        <a href="#">
        
                        <div class="row g-0">
                          <div class="col-md-4">
                       
                              <img
                                src="./img/video-2.svg"
                                class="card-img-right card-img-right-sm"
                                alt="Image"
                                loading="lazy"
                              />
                           
                          </div>
                          <div class="col-md-8">
                            <div class="card-body px-10">
                              <h5 class="card-title fw-bold fs-14 d-flex">
                                نمایشگاه تجهیزات تونل و فضاهای زیرزمینی مترو
                              </h5>
                            </div>
                          </div>
                        </div>
                        </a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card mb-3 border-0 shadow-none">
                        <a href="#">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img
                                src="./img/video-2.svg"
                                class="card-img-right card-img-right-sm"
                                alt="Image"
                                loading="lazy"
                              />
                            </div>
                            <div class="col-md-8">
                              <div class="card-body px-10">
                                <h5 class="card-title fw-bold fs-14 d-flex">
                                  نمایشگاه تجهیزات تونل و فضاهای زیرزمینی مترو
                                </h5>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card mb-3 border-0 shadow-none">
                        <a href="#">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img
                                src="./img/video-4.svg"
                                class="card-img-right card-img-right-sm"
                                alt="Image"
                                loading="lazy"
                              />
                            </div>
                            <div class="col-md-8">
                              <div class="card-body px-10">
                                <h5 class="card-title fw-bold fs-14 d-flex">
                                  جشن میلاد حضرت زهرا (س) با حضور شهردار تهران
                                </h5>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- If we need pagination -->
                  <div class="swiper-pagination swiper-pagination-main"></div>
                </div>
              </div>
            </div>
    </aside>
  </div>
</main>
@endsection

 