    @extends('layouts.master')

    @section('pageTitle')
    صفحه اصلی
    @endsection
    @section('content')
    <main>
      <div class="container">
        <div class="row gx-20">
          <article class="col-12 col-lg-8">
            <!-- Slider -->
            <section class="mb-20 fullwidth-sm">
              <div class="carousel slide rounded-12 overflow-hidden">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    

                    <a href="{{ $heading->article_id }}/newsdetails">
                      <img
                        src="{{ $heading->image }}"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100"
                      />
                    </a>
                    <div class="carousel-caption">
                      <h5 class="fw-bold">
                        <span class="logo-white-svg"></span>
                        {{ $heading->article()->first()->title }}
                      </h5>
                      <div class="carousel-caption-link">
                        <button class="btn btn-sm btn-glass">
                          {{ $heading->article()->first()->comision()->first()->name }}
                        </button>
                        <span>{{ $heading->article()->first()->updated_at }}</span>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </section>
            <!-- Blogs -->
            @include('layouts.hotnews')
          </article>
          <aside class="col-12 col-lg-4">
            <!-- Ad -->
            <div class="card mb-20">
              <a href="#">
                <img
                  src="./img/ad.svg"
                  alt="Image"
                  loading="lazy"
                  class="img-fluid w-100"
                />
                <div class="abs-top-right">
                  <h5 class="fw-bold mt-30 fs-20">
                    <span class="logo-svg"></span>
                    شهروند خبرنگار
                  </h5>
                  <p style="margin-right: 2.5rem">
                    شما هم می توانید خبرنگار باشید
                  </p>
                </div>
              </a>
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
            @include('front.adverse')
           @include('layouts.topviews')

            <!-- Notes -->
            @include('layouts.notes')
          </aside>
        </div>
        <!-- Videos -->
        @include('front.videos')
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
        <!-- Cities -->
          @include('front.cities')
        <!-- Social Medias -->
        <section>
          <div class="card">
            <div class="d-none d-lg-flex justify-content-between mt-5">
              <h5 class="fs-20 fw-bold">
                <span class="logo-svg"></span>
                ما را در شبکه های اجتماعی دنبال کنید
              </h5>
              <p class="fw-bold fs-18" style="padding-left: 30px">
                iranmbc.ir <span class="instagram-original-svg"></span>
              </p>
            </div>
            <div class="d-flex justify-content-between d-lg-none mt-5">
              <h5 class="fs-20 fw-bold">
                <span class="logo-svg"></span>
                ما را دنبال کنید
              </h5>
              <p class="fw-bold fs-18" style="margin-left: 20px">
                iranmbc.ir <span class="instagram-original-svg"></span>
              </p>
            </div>
            <div class="card-body px-30">
              <!-- Slider main container -->
              <div class="swiper" data-swiper-slides="6">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <a href="#">
                      <img
                        src="./img/social-media-1.svg"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100"
                      />
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">
                      <img
                        src="./img/social-media-2.svg"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100"
                      />
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">
                      <img
                        src="./img/social-media-3.svg"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100"
                      />
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">
                      <img
                        src="./img/social-media-4.svg"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100"
                      />
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">
                      <img
                        src="./img/social-media-5.svg"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100"
                      />
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#">
                      <img
                        src="./img/social-media-6.svg"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid w-100"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    @endsection

   
  