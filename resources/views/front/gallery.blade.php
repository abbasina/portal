@extends('layouts.master')
@section('styles')
<link rel="stylesheet" href="/css/pages/images.css" />
<link rel="stylesheet" href="/css/owl.carousel.min.css" />
@endsection
@section('pageTitle')
گالری تصاویر
@endsection
@section('content')
<main class="container">
  <h1 class="main-title">عکس</h1>
  <div class="brudcrumbs my-3">
    <ul>
      <li>
        <a href="#">صفحه اصلی</a>
      </li>
      <li>
        <span> / </span>
      </li>
      <li>
        <a href="#">عکس </a>
      </li>
    </ul>
  </div>
  <!-- Images -->
  <section class="mb-30">
    <div class="card" style="background-color: transparent !important;box-shadow: none !important;">
      <div class="card-body" style="padding: 0 !important;">
        <!-- Slider main container -->
        <div id="images-slider" class="swiper" data-swiper-slides="2">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($albums as $album)
            <div class="swiper-slide">
              <div class="img-shadow"></div>

              <a href="#">
                <img
                  src="/{{ $album->index }}"
                  alt="Image"
                  loading="lazy"
                  class="img-fluid w-100"
                />
              </a>
              <div class="owl-caption">
                <h5 class="fw-bold">
                  <span class="logo-white-svg"></span> 
                  {{ $album->title }}
                </h5>
                <div class="owl-caption-link">
                  <span>{{ $album->updated_at }}</span>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev button"></div>
      <div class="swiper-button-next button"></div>
    </div>
  </section>
  <section class="my-5">
    <form action="">
      <div class="row g-3">
        <div class="col-12 col-lg-3">
          <div class="bg-white rounded-12">
            <div class="row">
              <div class="col-auto d-table">
                <span class="v-center ps-4">دسته بندی ها</span>
                <span class="v-center p-2">
                  <span class="border-end py-2 ps-2"></span>
                </span>
              </div>
              <div class="col" style="margin-right: -1vw">
                <select class="form-select py-3 border-0">
                  <option value="">عنوان دسته بندی</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-9">
          <div class="bg-white rounded-12">
            <div class="input-group input-group-sm border-0">
              <input
                type="text"
                class="form-control form-control-sm border-0 py-3 px-4"
                placeholder="جستجو کنید"
              />
              <span
                class="input-group-text border-0"
                style="border-radius: 12px"
              >
                <span
                  role="button"
                  class="search-svg"
                  style="padding: 1rem"
                ></span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="row row-cols-1 row-cols-lg-3 mt-3">
      @foreach ($images as $image)
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <img
                src="/{{ $image->image }}"
                alt="Image"
                class="img-fluid w-100"
                loading="lazy"
              />
            </div>
            <h5 class="fw-bold mt-2 fs-14">
            {{ $image->album->title }}
            </h5>
            <div class="d-flex text-gray">
              <span>{{ $image->updated_at }}</span>
              <span class="border-end mx-3"></span>
              <span>{{ $image->album->photographer }}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach


    </div>
    {{ $images->links() }}
  </section>
</main>
@endsection

 