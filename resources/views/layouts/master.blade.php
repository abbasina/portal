<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="stylesheet" href="/css/all.css" /> --}}
    <link rel="stylesheet" href="/css/bootstrap.rtl.min.css" />
    <link rel="stylesheet" href="/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/fontiran.css" />
    <link rel="stylesheet" href="/css/styles.css" />  
      @yield('styles')
      <link rel="stylesheet" href="/css/pages/index.css" />
    
    <title>@yield('pageTitle')</title>
  </head>
  <body>
    <div id="page-overlay"></div>
    <!-- Desktop Header -->
    <header class="d-none d-lg-block shadow">
      <div class="container">
        <nav class="py-4 text-end">
         @guest()
          <a href="{{ route('showlogin') }}"
            ><span class="user-svg"></span>ورود
          </a>
          <span>/</span>
          <a href="{{ route('showregister') }}"
            >ثبت نام
          </a>
          @endguest
          @auth
          <a href="{{ route('manager.profile') }}"
          ><span class="user-svg"></span> پنل کاربری
          </a> 
          @endauth
          <span class="border-end mx-3"></span>
          <span class="calender-svg ss02"></span>
           {{ Verta::instance()->format('l %d %B %Y') }}
          
              
          <span class="border-end mx-3"></span>
          <a href="#" data-bs-toggle="modal" data-bs-target="#searchModal"
            ><span class="search-svg"></span>جستجو
          </a>
        </nav>
      </div>
      <hr class="m-0" />
      <div class="container">
        <a href="/">
        <div class="nav-seprator"></div>
        </a>
        <nav class="navbar navbar-expand-lg bg-white pt-0">
          
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 ms-auto" style="z-index: 3">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="{{ route('index') }}"
                  >صفحه اصلی</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('aboutcouncil') }}">درباره مجمع</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('newsarchive')}}">اخبار کلانشهرها</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="{{'comisions'}}"
                  id="navbarDropdown"
                  role="button"
                  aria-expanded="false"
                >
                  اخبار کمیسیون ها
                </a>
                <div class="dropdown-menu">
                  <ul aria-labelledby="navbarDropdown">
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >ارتباطات و امور بین الملل
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >برنامه ریزی و سرمایه سازمانی
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >پیشگیری و مدیریت بحران
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}">حقوقی </a>
                    </li>
                  </ul>
                  <ul aria-labelledby="navbarDropdown">
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >حمل و نقل و ترافیک
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >خدمات شهری و محیط زیست
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >شهرسازی و معماری
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >فرهنگی و اجتماعی
                      </a>
                    </li>
                  </ul>
                  <ul aria-labelledby="navbarDropdown">
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >فناوری و شهر هوشمند
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >فنی و عمرانی
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >مالی و اقتصاد شهری
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('newsarchive')}}"
                        >فرهنگی و اجتماعی
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('images') }}">عکس</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">فیلم</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('newsarchive')}}">آرشیو اخبار</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">اتاق گفتگو</a>
              </li>
              <li class="nav-item me-0">
                <a class="nav-link" href="{{route('contactus')}}">ارتباط با ما</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- Mobile Header -->
    <header class="d-block d-lg-none shadow">
      <nav id="mobileNavbar">
        <div class="d-flex justify-content-between">
          <div style="height: 40px; margin-top: 1rem">
          <a href="/">
          <span class="banner-svg"></span>
          </a>
          </div>
          <button
            class="navbar-toggler"
            type="button"
            onclick="toggleMobileNavbarContainer()"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="container-fluid">
          <div
            id="menu-detail"
            class="border-top py-3 d-flex justify-content-between mt-2 w-100"
          >
          @guest()
          <a href="{{ route('showlogin') }}"
            ><span class="user-svg"></span>ورود
          </a>
          <span>/</span>
          <a href="{{ route('showregister') }}"
            >ثبت نام
          </a>
          @endguest
          @auth
          <a href="{{ route('manager.profile') }}"
          ><span class="user-svg"></span> پنل کاربری
          </a> 
          @endauth
            <span>
              <span class="calender-svg"></span>دوشنبه 4 بهمن 1400
            </span>
            <a href="#" data-bs-toggle="modal" data-bs-target="#searchModal"
              ><span class="search-svg"></span>جستجو
            </a>
          </div>
        </div>
        <div id="mobileNavbarContainer">
          <div class="bg-green p-2 d-flex justify-content-between">
            <span>منوی دسترسی</span>
            <button
              class="btn-close btn-close-white"
              onclick="toggleMobileNavbarContainer()"
            ></button>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{'/'}}"
                >صفحه اصلی</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('aboutcouncil') }}">درباره مجمع</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('newsarchive')}}">اخبار کلانشهرها</a>
            </li>
            <li class="nav-item accordion-item-wrapper">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    اخبار کمیسیون ها
                  </button>
                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <ul class="green-list">
                        <li>
                          <a href="#"
                            >ارتباطات و امور بین الملل
                          </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}"
                            >برنامه ریزی و سرمایه سازمانی
                          </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">پیشگیری و مدیریت بحران </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">حقوقی </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">حمل و نقل و ترافیک </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">خدمات شهری و محیط زیست </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">شهرسازی و معماری </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">فرهنگی و اجتماعی </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">فناوری و شهر هوشمند </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">فنی و عمرانی </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">مالی و اقتصاد شهری </a>
                        </li>
                        <li>
                          <a href="{{route('newsarchive')}}">فرهنگی و اجتماعی </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">عکس</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">فیلم</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('newsarchive') }}">آرشیو اخبار</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">اتاق گفتگو</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contactus') }}">ارتباط با ما</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
                @yield('content')
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-3">
            <h5 class="fw-bold fs-18">لینک ها دسترسی</h5>
            <div id="access-links">
              <ul class="footer-link">
                <li>
                  <a href="#"> درباره ما </a>
                </li>
                <li>
                  <a href="#"> ارتباط ما </a>
                </li>
                <li>
                  <a href="#"> آرشیو اخبار </a>
                </li>
                <li>
                  <a href="#"> پیوندها </a>
                </li>
                <li>
                  <a href="#"> عکس </a>
                </li>
                <li>
                  <a href="#"> فیلم </a>
                </li>
              </ul>
              <ul class="footer-link">
                <li>
                  <a href="#"> عنوان لینک مورد نظر </a>
                </li>
                <li>
                  <a href="#"> عنوان لینک مورد نظر </a>
                </li>
                <li>
                  <a href="#"> عنوان لینک مورد نظر </a>
                </li>
                <li>
                  <a href="#"> عنوان لینک مورد نظر </a>
                </li>
                <li>
                  <a href="#"> عنوان لینک مورد نظر </a>
                </li>
                <li>
                  <a href="#"> عنوان لینک مورد نظر </a>
                </li>
              </ul>
            </div>
          </div>
          <hr class="d-block d-lg-none" />
          <div class="col-12 offset-lg-1 col-lg-4">
            <h5 class="fw-bold fs-18">اطلاعات تماس</h5>
            <ul class="footer-link" style="list-style: none">
              <li id="footer_address" >
                <span class="location-svg"></span>
                <p style="margin-top: 1rem">
                  نشانی: تهران ، میدان ونک ، خیابان محمدباقر خدامی ، پلاک ۳۴
                </p>
              </li>
              <li>
                <span class="tel-svg"></span>
                <p class="d-inline-block">
                  تلفن:
                  <span class="me-3"> ۹۶۰۱۵۳۳۸-۰۲۱ </span>
                  <span> ۰۲۱-۹۶۰۱۵۳۸۰ </span>
                </p>
              </li>
              <li>
                <span class="print-svg"> </span>
                <p class="d-inline-block">فکس: ۹۶۰۹۰۳۳۱-۰۲۱</p>
              </li>
              <li>
                <span class="envelope-svg"></span>
                <p class="d-inline-block">پست الکترونیک: iranmbcir@gmail.com</p>
              </li>
            </ul>
          </div>
          <hr class="d-block d-lg-none" />

          <div class="col-12 offset-lg-1 col-lg-3 text-center">
            <img
              src="/img/banner-footer.svg"
              alt="Image"
              loading="lazy"
              class="img-fluid"
            />
            <div class="mt-3 social-medias">
              <a href="tg://msg_url/url={!! url()->current() !!}" class="social-media" target="_blank">
                <span class="telegram-svg"></span>
              </a>
              <a href="whatsapp://send?text={!! url()->current() !!}" class="social-media" target="_blank">
                <span class="whatsapp-svg"></span>
              </a>
              <a href="https://twitter.com/intent/tweet?url={!! url()->current() !!}" class="social-media" target="_blank">
                <span class="twitter-svg"></span>
              </a>
            </div>
          </div>
        </div>
        <hr />
        <div class="text-center">
          <p>
            کلیه حقوق این سایت متعلق به مجمع شهرداران کلانشهرهای ایران می باشد
          </p>
        </div>
      </div>

      <div class="abs-bottom-left" style="left: -9%">
        <span class="logo-footer-svg"></span>
      </div>
    </footer>

    <!-- Search Modal -->
    <div
      class="modal modal-center fade"
      id="searchModal"
      tabindex="-1"
      aria-labelledby="searchModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content bg-transparent border-0">
          <form action="{{ route('search') }}" method="get">
            
            
            <div class="bg-white border-radius-12">
              <div
                id="search-input-modal"
                class="input-group input-group-lg border-0"
              >
                <input
                  type="text"
                  class="form-control form-control-lg py-3 border-0"
                  name="keyword"
                  placeholder="کلمه یا عبارت مورد نظر خود را جستجو کنید"
                />
                <button type="submit" class="input-group-text border-0">
                  
                  <span class="input-group-text border-0">
                    <span
                      role="button"
                      class="search-svg"
                      style="padding: 1rem;background-size: 24px;"
                    ></span>
                  </span>

                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div
      class="modal modal-center fade"
      id="shareModal"
      tabindex="-1"
      aria-labelledby="shareModalLabel"
      aria-hidden="true"
      style="display: none"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <img
                src="/img/share-modal.svg"
                alt="Image"
                loading="lazy"
                class="img-fluid"
              />
              <h5 class="fw-bold my-3">اشتراک گذاری</h5>
              <p>
                شما می توانید از طریق لینک های زیر این خبر را به اشتراک بگذارید
              </p>
            </div>
            <form action="">
              <div class="input-group input-group-lg mb-3">
                <input
                  type="text"
                  class="form-control form-control-lg py-3"
                  value="{!! url()->current() !!}"
                  
                />
                <span id="copy_url" role="button" class="input-group-text">
                  <span class="copy-svg"></span>
                </span>
              </div>
            </form>
            <div class="row row-cols-1 row-cols-lg-3">
              <div class="col">
                <a rel="nofollow" href="whatsapp://send?text={!! url()->current() !!}" target="_blank"> 		
                
                <button class="btn btn-lg btn-whatsapp w-100 py-3">
                  <div class="d-flex justify-content-between">
                    <span> واتساپ </span>
                    <span>
                      <span class="whatsapp-svg"></span>
                    </span>
                  </div>
                </button>
                </a>
              </div>
              <div class="col">
                <a rel="nofollow" href="tg://msg_url/url={!! url()->current() !!}" target="_blank">
                  
                <button class="btn btn-lg btn-telegram w-100 py-3">
                  <div class="d-flex justify-content-between">
                    <span>

                      تلگرام
                    </span>
                    <span>

                      <span class="telegram-svg"></span>
                    </span>
                </button>
                </a>
              </div>
              <div class="col">
                <a href="https://twitter.com/intent/tweet?url={!! url()->current() !!}" target="_blank">
                <button class="btn btn-lg btn-twitter w-100 py-3">
                  <div class="d-flex justify-content-between">
                    <span>
                      
                      توئیتر
                    </span>
                    <span>

                      <span class="twitter-svg"></span>
                    </span>
                  </div>

                </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <script src="/js/all.js"></script> --}}
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/custom.js"></script>
      @yield('scripts')

  </body>
</html>
