<div id="notes" class="card mb-30 d-none d-lg-flex">
    <div class="d-flex justify-content-between mt-30">
      <h5 class="fw-bold fs-20">
        <span class="logo-svg"></span>
        یادداشت
      </h5>
      <a href="#" class="text-gray me-3"
        >مشاهده آرشیو <span class="angle-left-svg"></span
      ></a>
    </div>
    <div class="card-body" >
        @foreach ($notes as $note)
        <div class="card border-0 shadow-none">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="{{ route('notedetails',$note->id) }}">
                  <img
                    src="/pngarchive/{{ $note->imageUrl }}"
                    class="card-img-right card-img-right-sm"
                    alt="Image"
                    loading="lazy"
                  />
                </a>
              </div>
              <div class="col-md-8">
                <a href="{{ route('notedetails',$note->id) }}">
                <div class="card-body">
                  <h5 class="card-title fs-14 fw-bold">
                    {{ $note->title }}
                  </h5>
                  <p class="date">{{ ($note->user->fullname) }}</p>
                </div>
                </a>
              </div>
            </div>
          </div>
        @endforeach


   







</div>
    </div>



    
    <div class="card mb-20 d-flex d-lg-none">
    <div class="d-flex justify-content-between mt-30">
      <h5 class="fw-bold fs-20">
        <span class="logo-svg"></span>
        یادداشت
      </h5>
      <a href="#" class="text-gray me-3"
        >مشاهده آرشیو <span class="angle-left-svg"></span
      ></a>
    </div>
    <div class="card-body">
      <!-- Slider main container -->
      <div id="notes-mobile-slider" class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="card mb-20 border-0 shadow-none">
              <div class="row g-0">
                <div class="col-md-4">
                  <a href="#">
                    <img
                      src="./img/not-1.svg"
                      class="card-img-right card-img-right-sm"
                      alt="Image"
                      loading="lazy"
                    />
                  </a>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title fs-14 fw-bold">
                      عنوان مقاله مورد نظر در این قسمت قرار می گیرد
                    </h5>
                    <p class="date">1400/11/04</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card mb-20 border-0 shadow-none">
              <div class="row g-0">
                <div class="col-md-4">
                  <a href="#">
                    <img
                      src="./img/not-1.svg"
                      class="card-img-right card-img-right-sm"
                      alt="Image"
                      loading="lazy"
                    />
                  </a>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title fs-14 fw-bold">
                      عنوان مقاله مورد نظر در این قسمت قرار می گیرد
                    </h5>
                    <p class="date">1400/11/04</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card mb-20 border-0 shadow-none">
              <div class="row g-0">
                <div class="col-md-4">
                  <a href="#">
                    <img
                      src="./img/not-1.svg"
                      class="card-img-right card-img-right-sm"
                      alt="Image"
                      loading="lazy"
                    />
                  </a>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title fs-14 fw-bold">
                      عنوان مقاله مورد نظر در این قسمت قرار می گیرد
                    </h5>
                    <p class="date">1400/11/04</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination swiper-pagination-main"></div>
      </div>
    </div>
  </div>