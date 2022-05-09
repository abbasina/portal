@extends('layouts.master')
@section('pageTitle')
{{ $note->title }}
@endsection
@section('content')
<main class="container">
  <h1 class="main-title mb-15">
    {{ $note->title }}
    </h1>
  <div class="row row-cols-auto mb-15">
    <div class="col">
      <span class="badge bg-green py-2 px-4 fs-12">{{ $note->user->fullname }}</span>
    </div>
    <div class="col">
      <span class="calender-svg"></span>
      <p class="d-inline-block m-0 fs-12">{{ $note->updated_at }}</p>
    </div>
    <div class="col mt-1">
      <span class="share-svg"></span>
      <a
        href="#"
        data-bs-toggle="modal"
        data-bs-target="#shareModal"
        class="d-inline-block fs-12"
      >
        اشتراک گذاری
      </a>
    </div>
    <div class="col mt-1">
      <span class="print-green-svg"></span>
      <a href="#" onclick="window.print()" class="fs-12 d-inline-block"> چاپ صفحه </a>
    </div>
    
    <div class="col" id="back">
      <a href="{{route('notesarchive')}}" class="fs-14"
        >بازگشت به آرشیو یادداشت ها <span class="angle-left-svg"></span
      ></a>
    </div>
  </div>
  <div class="row">
    <article class="col-12 col-lg-8">
      <section class="mb-3">
        <div class="card">
          <div class="card-body p-30">

            <p class="fw-bold lh-lg mb-3">
              {{ $note->description }}
            </p>
            <hr />
            {!! $note->notebody !!}
            

            <div class="row row-cols-auto gx-2 mt-30">
              <div class="col">
                <p>کلمات کلیدی</p>
              </div>
              <div class="col">
              @foreach (explode('|',$note->tags) as $tagname )
              
              <a href="{{ route('search',$tagname) }}"><span class="tag">{{ $tagname }}</span></a>

              
              @endforeach
            </div>


              
              <div class="col prev-next-pagination">
                @if(isset($previous))
                  <a href="{{ route('notedetails',$previous) }}" class="me-2">
                    <span class="angle-right-svg"></span>
                    مطلب قبلی
                  </a>
                @endif
                @if(isset($next))
                  <a href="{{ route('notesdetails',$next) }}" class="ms-2">
                    مطلب بعدی
                    <span class="angle-left-svg"></span>
                  </a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </section>
      {{-- @include('layouts.comment') --}}
    </article>
      
    
    <aside class="col-12 col-lg-4">
      <!-- Top views -->
@include('layouts.topviews')
      <!-- News -->
      <div class="card my-3">
        <div class="d-flex justify-content-between mt-5">
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
                  src="/img/news.svg"
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
                  src="/img/news.svg"
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
                  src="/img/news.svg"
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
                  src="/img/news.svg"
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
                  <img
                    src="/img/video-1.svg"
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
          <div class="card mb-3 border-0 shadow-none">
            <a href="#">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="/img/video-2.svg"
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
          <div class="card mb-3 border-0 shadow-none">
            <a href="#">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="/img/video-3.svg"
                    class="card-img-right card-img-right-sm"
                    alt="Image"
                    loading="lazy"
                  />
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
                  <img
                    src="/img/video-4.svg"
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
                          src="/img/video-1.svg"
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
                          src="/img/video-2.svg"
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
                          src="/img/video-2.svg"
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
                          src="/img/video-4.svg"
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
              src="/img/ad.svg"
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

@section('scripts')
<script>
  $('#setcommentModal').on('show.bs.modal' , function (event) {
    let button = $(event.relatedTarget);
    let parentId = button.data('parent');
    let modal = $(this);
    modal.find("[name='parent_id']").val(parentId);
});
</script>
@endsection

   