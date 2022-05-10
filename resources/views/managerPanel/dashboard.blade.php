<div class="col-12 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="row row-cols-auto">
                <div class="col">

                    <img src="/img/user-big.svg" alt="Image" loading="lazy" class="img-fluid">
                </div>
                <div class="col">

                    <h5 class="fw-bold mt-3 fs-16">{{ auth()->user()->fullname }}</h5>
                    <p>خوش آمدید</p>
                </div>
            </div>


                <div class="accordion mt-3" id="accordionflusher">
                  @can('manage')
                    
                  
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headinginvites">
                    <button class="accordion-button bg-success text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushcollapseinvites" aria-expanded="false" aria-controls="flushcollapseinvites">
                        کدهای معرف
                    </button>
                  </h2>
                  <div id="flushcollapseinvites" class="accordion-collapse collapse" aria-labelledby="headinginvites" data-bs-parent="#accordionflusher">
                    <div class="accordion-body">
                        <a  href="{{ route(auth()->user()->role->title.'.invites') }}">لیست کدها</a><hr>
                        <a  href="{{ route(auth()->user()->role->title.'.invites.create') }}">ایجاد کد جدید</a>
                    </div>
                  </div>
                </div>
                @endcan
                @can('manage')
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingcomision">
                    <button class="accordion-button bg-success text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushcollapsecomision" aria-expanded="false" aria-controls="flushcollapsecomision">
                         مدیریت کمیسیون ها
                    </button>
                  </h2>
                  <div id="flushcollapsecomision" class="accordion-collapse collapse" aria-labelledby="headingcomision" data-bs-parent="#accordionflusher">
                    <div class="accordion-body">
                        <a  href="{{ route(auth()->user()->role->title.'.comisions') }}">لیست کمیسیون ها</a><hr>
                        <a  href="{{ route(auth()->user()->role->title.'.comisions.create') }}">ایجاد کمیسیون جدید</a>
                    </div>
                  </div>
                </div>
                @endcan
                @can('manage')                  
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button bg-success text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushcollapseOne" aria-expanded="false" aria-controls="flushcollapseOne">
                        مدیریت کاربران
                    </button>
                  </h2>
                  <div id="flushcollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionflusher">
                    <div class="accordion-body">
                        <a  href="{{ route(auth()->user()->role->title.'.users') }}">لیست کاربران</a><hr>
                    </div>
                  </div>
                </div>
                @endcan
                @can('member')
                  
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button bg-success text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushcollapseTwo" aria-expanded="false" aria-controls="flushcollapseTwo">
                        مدیریت پیام ها 

                    </button>
                  </h2>
                  <div id="flushcollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionflusher">
                    <div class="accordion-body">
                        <a  href="{{ route(auth()->user()->role->title.'.messages.create') }}">ایجاد پیام جدید</a><hr>
                        <a  href="{{ route(auth()->user()->role->title.'.messages.received') }}">پیام های دریافتی</a><hr>
                        <a  href="{{ route(auth()->user()->role->title.'.messages.sent') }}">پیام های ارسالی</a>
                    </div>
                  </div>
                </div>
                @endcan
                @can('note')                 
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingNote">
                    <button class="accordion-button bg-success text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushcollapseNote" aria-expanded="false" aria-controls="flushcollapseNote">
مدیریت یادداشت ها
                    </button>
                  </h2>
                  <div id="flushcollapseNote" class="accordion-collapse collapse" aria-labelledby="headingNote" data-bs-parent="#accordionflusher">
                    <div class="accordion-body">
                        <a  href="{{ route(auth()->user()->role->title.'.notes.create') }}">ایجاد یادداشت جدید</a><hr>
                        <a  href="{{ route(auth()->user()->role->title.'.notes') }}">وضعیت یادداشت های من</a><hr>
                    </div>
                  </div>
                </div>
                @endcan
                @can('report')                 
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button bg-success text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushcollapseThree" aria-expanded="false" aria-controls="flushcollapseThree">
                      مدیریت اخبار
                    </button>
                  </h2>
                  <div id="flushcollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionflusher">
                    <div class="accordion-body">
                        <a  href="{{ route(auth()->user()->role->title.'.articles.create') }}">ایجاد خبر جدید</a><hr>
                        <a  href="{{ route(auth()->user()->role->title.'.articles') }}">وضعیت اخبار</a><hr>
                    </div>
                  </div>
                </div>
                @endcan
                @can('commentor')
                  
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button bg-success text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushcollapseFour" aria-expanded="false" aria-controls="flushcollapseFour">
                      مدیریت نظرات
                    </button>
                  </h2>
                  <div id="flushcollapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionflusher">
                    <div class="accordion-body">
                        <a  href="{{ route(auth()->user()->role->title.'.comments.unconfirmed') }}">نظرات تایید نشده</a><hr>
                        <a  href="{{ route(auth()->user()->role->title.'.comments.confirmed') }}">نظرات تایید شده</a><hr>
                        
                    </div>
                  </div>
                </div>
                @endcan
                @can('manage')
                  
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button bg-success text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushcollapseFive" aria-expanded="false" aria-controls="flushcollapseFive">
مدیریت گالری تصاویر
                    </button>
                  </h2>
                  <div id="flushcollapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionflusher">
                    <div class="accordion-body">
                        <a  href="{{ route(auth()->user()->role->title.'.albums.create') }}">ایجاد آلبوم جدید</a><hr>
                        <a  href="{{ route(auth()->user()->role->title.'.albums') }}">مشاهده آلبوم ها</a><hr>
                    </div>
                  </div>
                </div>
                @endcan
                @can('manage')
                  
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingGallery">
                    <button class="accordion-button bg-success text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushcollapseGallery" aria-expanded="false" aria-controls="flushcollapseGallery">
                      مدیریت کلانشهرها
                    </button>
                  </h2>
                  <div id="flushcollapseGallery" class="accordion-collapse collapse" aria-labelledby="headingGallery" data-bs-parent="#accordionflusher">
                    <div class="accordion-body">
                        <a  href="{{ route(auth()->user()->role->title.'.capitals.create') }}">ایجاد کلانشهر جدید</a><hr>
                        <a  href="{{ route(auth()->user()->role->title.'.capitals') }}">مشاهده کلانشهرها ها</a><hr>
                    </div>
                  </div>
                </div>
                @endcan
                @can('manage')
                  
                
                <div class="accordion-item">
                <a href="{{ route(auth()->user()->role->title.'.heading') }}">
                <button class="password-button bg-success text-white" type="button">
                   تیتر یک صفحه اصلی
                </button>
                </a>
                </div>
                @endcan
                @can('manage')
                  
                
                <div class="accordion-item">
                <a href="{{ route(auth()->user()->role->title.'.videos') }}">
                <button class="password-button bg-success text-white" type="button">
                  مدیریت ویدئوها
                </button>
                </a>
                </div>
                @endcan
                <div class="accordion-item">
                <a href="{{ route(auth()->user()->role->title.'.mycomments') }}">
                <button class="password-button bg-success text-white" type="button">
                  نظرات من
                </button>
                </a>
                </div>

                <div class="accordion-item">
                <a href="{{ route(auth()->user()->role->title.'.profile') }}">
                <button class="password-button bg-success text-white" type="button">
                  مشاهده پروفایل 
                </button>
                </a>
                </div>
                <div class="accordion-item">
                <a href="{{ route('logout') }}">
                <button class="password-button bg-success text-white" type="button">
                  خروج
                </button>
                </a>
                </div>
              </div>

        </div>
    </div>
</div>