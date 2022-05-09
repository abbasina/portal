@extends('layouts.master')
@section('pageTitle')
کمیسیون فرهنگی و اجتماعی
@endsection
@section('content')
<main class="container">
  <h1 class="main-title">فرهنگی و اجتماعی</h1>
  <div class="brudcrumbs my-3">
    <ul>
      <li>
        <a href="#">صفحه اصلی</a>
      </li>
      <li>
        <span> / </span>
      </li>
      <li>
        <a href="#"> اخبار کمیسیون ها </a>
      </li>
      <li>
        <span> / </span>
      </li>
      <li>
        <a href="#"> فرهنگی و اجتماعی</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <article class="col-12 col-lg-8">
      <!-- Slider -->
      <section class="mb-3 fullwidth-sm">
        <div
          id="sliderCarousel"
          class="carousel slide rounded-12 overflow-hidden"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="img-shadow"></div>

              <a href="#">
                <img
                  src="./img/slider.png"
                  alt="Image"
                  loading="lazy"
                  class="img-fluid w-100"
                />
              </a>
              <div class="carousel-caption">
                <h5 class="fw-bold">
                  <span class="logo-white-svg"></span> شهرداری باید با توسعه
                  زیرساخت‌ها در جهت کمک به هوای پاک حرکت نماید
                </h5>
                <div class="carousel-caption-link">
                  <button class="btn btn-sm btn-glass">
                    عنوان دسته بندی
                  </button>
                  <span>1400/11/04</span>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="img-shadow"></div>

              <a href="#">
                <img
                  src="./img/slider.png"
                  alt="Image"
                  loading="lazy"
                  class="img-fluid w-100"
                />
              </a>

              <div class="carousel-caption">
                <h5 class="fw-bold">
                  <span class="logo-white-svg"></span> شهرداری باید با توسعه
                  زیرساخت‌ها در جهت کمک به هوای پاک حرکت نماید
                </h5>
                <div class="carousel-caption-link">
                  <button class="btn btn-sm btn-glass">
                    عنوان دسته بندی
                  </button>
                  <span>1400/11/04</span>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="img-shadow"></div>

              <a href="#">
                <img
                  src="./img/slider.png"
                  alt="Image"
                  loading="lazy"
                  class="img-fluid w-100"
                />
              </a>

              <div class="carousel-caption">
                <h5 class="fw-bold">
                  <span class="logo-white-svg"></span> شهرداری باید با توسعه
                  زیرساخت‌ها در جهت کمک به هوای پاک حرکت نماید
                </h5>
                <div class="carousel-caption-link">
                  <button class="btn btn-sm btn-glass">
                    عنوان دسته بندی
                  </button>
                  <span>1400/11/04</span>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#sliderCarousel"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#sliderCarousel"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <!-- Blogs -->
      <section class="more-shadow-hover card-body-padding-20 mt-sm-19">
        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-1.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان
                    شد
                  </h5>
                  <p class="card-text text-muted">
                    رئیس بنیاد شهید و امور ایثارگران با بیان اینکه
                    آتش‌نشانان حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم
                    شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-2.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    نمایشگاه «حمل‌ونقل پاک» افتتاح شد
                  </h5>
                  <p class="card-text text-muted">
                    به مناسبت هفته ملی هوای پاک، نمایشگاه «حمل‌ونقل پاک» با
                    حضور علیرضا زاکانی در بوستان گفتگو افتتاح شد
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-3.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    حریق ۹ خودرو و مصدومیت ۸ نفر به دلیل آتش‌سوزی گسترده در
                    خیابان پاسدار گمنام
                  </h5>
                  <p class="card-text text-muted">
                    رئیس بنیاد شهید و امور ایثارگران با بیان اینکه
                    آتش‌نشانان حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم
                    شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-4.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    کلنگ احداث پارک ویژه مادر و کودک بر زمین خورد/ بررسی
                    جزئیات طرح شاخه شرقی بزرگراه یادگار امام(ره)
                  </h5>
                  <p class="card-text text-muted">
                    شهردار پایتخت در هشتمین برنامه از سلسله بازدیدهای هفتگی
                    خود از مناطق شهر برای بررسی مشکلات، چالش ها و فرصت ها از
                    ساعت ۶:۳۰ صبح امروز به منطقه۱۰ تهران رفت
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-5.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    چراغ سبز تهران و بانکوک به همکاری در زمینه موتور برقی
                  </h5>
                  <p class="card-text text-muted">
                    علیرضا زاکانی و سفیر تایلند در ایران در جلسه ای با
                    یکدیگر در زمینه مسائل و موضوعات شهری از جمله طرح موتور
                    برقی گفت و گو و تبادل نظر کردند
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-1.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    حکم شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان
                    شد
                  </h5>
                  <p class="card-text text-muted">
                    رئیس بنیاد شهید و امور ایثارگران با بیان اینکه
                    آتش‌نشانان حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم
                    شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-2.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    نمایشگاه «حمل‌ونقل پاک» افتتاح شد
                  </h5>
                  <p class="card-text text-muted">
                    به مناسبت هفته ملی هوای پاک، نمایشگاه «حمل‌ونقل پاک» با
                    حضور علیرضا زاکانی در بوستان گفتگو افتتاح شد
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-3.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    حریق ۹ خودرو و مصدومیت ۸ نفر به دلیل آتش‌سوزی گسترده در
                    خیابان پاسدار گمنام
                  </h5>
                  <p class="card-text text-muted">
                    رئیس بنیاد شهید و امور ایثارگران با بیان اینکه
                    آتش‌نشانان حادثه پلاسکو ‌شهید تلقی می‌شوند گفت: حکم
                    شهادت ۱۶ آتش‌نشان حادثه پلاسکو تقدیم خانواده‌هایشان شد
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-4.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    کلنگ احداث پارک ویژه مادر و کودک بر زمین خورد/ بررسی
                    جزئیات طرح شاخه شرقی بزرگراه یادگار امام(ره)
                  </h5>
                  <p class="card-text text-muted">
                    شهردار پایتخت در هشتمین برنامه از سلسله بازدیدهای هفتگی
                    خود از مناطق شهر برای بررسی مشکلات، چالش ها و فرصت ها از
                    ساعت ۶:۳۰ صبح امروز به منطقه۱۰ تهران رفت
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="card mb-20">
          <a href="#">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./img/blog-5.png"
                  class="card-img-right"
                  alt="Image"
                  loading="lazy"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body pt-sm-none">
                  <h5 class="card-title my-3 fw-bold fs-14">
                    چراغ سبز تهران و بانکوک به همکاری در زمینه موتور برقی
                  </h5>
                  <p class="card-text text-muted">
                    علیرضا زاکانی و سفیر تایلند در ایران در جلسه ای با
                    یکدیگر در زمینه مسائل و موضوعات شهری از جمله طرح موتور
                    برقی گفت و گو و تبادل نظر کردند
                  </p>
                  <p class="card-text mt-4 fs-sm-12">
                    <button class="btn btn-light text-muted">
                      عنوان دسته بندی
                    </button>
                    <span class="text-muted border-end px-2"
                      >1400/11/04</span
                    >
                    <span class="text-muted ms-2">10:45</span>
                  </p>
                </div>
              </div>
            </div>
          </a>
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
      </section>
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
                  <span class="bg-svg"></span>نشست هم اندیشی شهردار تهران با
                  نخبگان منطقه ۱۰ تهران
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
                  <span class="bg-svg"></span>نشست هم اندیشی شهردار تهران با
                  نخبگان منطقه ۱۰ تهران
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
                  <span class="bg-svg"></span>نشست هم اندیشی شهردار تهران با
                  نخبگان منطقه ۱۰ تهران
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
                  <span class="bg-svg"></span>نشست هم اندیشی شهردار تهران با
                  نخبگان منطقه ۱۰ تهران
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
    </aside>
  </div>
</main>
@endsection

 