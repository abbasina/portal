<section class="mb-30">
    <div class="card d-none d-lg-flex">
      <div class="d-flex justify-content-between mt-30">
        <h5 class="fs-20 fw-bold">
          <span class="logo-svg"></span>
          فیلم
        </h5>
        <a href="#" class="text-gray" style="margin-left: 2rem">
          مشاهده آرشیو <span class="angle-left-svg"></span>
        </a>
      </div>
      <div class="card-body px-30">
        <div class="mb-20 position-relative rounded-img-10">
          <a href="javascript:void(0)" onclick="toggleVideo(this)">
            <iframe                     
            width="100%"
            height="600px"
            id="video" src="{{ $videos[1]->url }}" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>


            
          </a>
        </div>
        <!-- Video list -->
        <div class="row row-cols-1 row-cols-lg-4 videos gx-30">
          <div class="col video-item active">
            <a href="javascript:void(0)">
              <div class="rounded-img-10">
                <video
                poster="{{ $videos[1]->imageUrl }}"
                width="100%"
                height="160px" onclick="selectVideo(this)" src="{{ $videos[1]->url }}"></video>

              </div>

              <p class="mt-2">
                <span class="film-svg"></span> {{ $videos[1]->title }}
              </p>
            </a>
          </div>
          <div class="col video-item">
            <a href="javascript:void(0)">
              <div class="rounded-img-10">
                
                <video
                poster="{{ $videos[2]->imageUrl }}"
                width="100%"
                height="160px" onclick="selectVideo(this)" src="{{ $videos[2]->url }}"></video>

              </div>
              <p class="mt-2">
                <span class="film-svg"></span>{{ $videos[2]->title }}
              </p>
            </a>
          </div>
          <div class="col video-item">
            <a href="javascript:void(0)">
              <div class="rounded-img-10">
                
                <video
                poster="{{ $videos[3]->imageUrl }}"
                width="100%"
                height="160px" onclick="selectVideo(this)" src="{{ $videos[3]->url }}"></video>

              </div>
              <p class="mt-2">
                <span class="film-svg"></span>{{ $videos[3]->title }}
              </p>
            </a>
          </div>
          <div class="col video-item">
            <a href="javascript:void(0)">
              <div class="rounded-img-10">
                
                <video
                poster="{{ $videos[4]->imageUrl }}"
                width="100%"
                height="160px" onclick="selectVideo(this)" src="{{ $videos[4]->url }}"></video>

              </div>

              <p class="mt-2">
                <span class="film-svg"></span>{{ $videos[4]->title }}
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-20 d-flex d-lg-none">
      <div class="d-flex justify-content-between mt-30">
        <h5 class="fw-bold fs-20">
          <span class="logo-svg"></span>
          فیلم
        </h5>
        <a href="#" class="text-gray me-3"
          >مشاهده آرشیو <span class="angle-left-svg"></span
        ></a>
      </div>

      <div class="card-body p-sm-none pb-30 px-30">
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="card-body px-30">
                <!-- Video list -->
                <div class="col video-item active">
                  <a
                    href="javascript:void(0)"
                    
                  >
                    <div
                      class="rounded-img-10"
                      style="position: relative"
                    >
                  <iframe                     
                    width="100%"
                    height="150px"
                    id="video" src="{{ $videos[1]->url }}" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>

                    </div>

                    <p class="mt-2 d-flex">
                      <span class="film-svg"></span> {{ $videos[1]->title }}
                    </p>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-body px-30">
                <!-- Video list -->
                <div class="col video-item">
                    <a
                    href="javascript:void(0)"
                    
                  >
                    <div
                      class="rounded-img-10"
                      style="position: relative"
                    >
                  <iframe                     
                    width="100%"
                    height="150px"
                    id="video" src="{{ $videos[2]->url }}" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>

                    </div>

                    <p class="mt-2 d-flex">
                      <span class="film-svg"></span> {{ $videos[2]->title }}  
                    </p>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-body px-30">
                <!-- Video list -->
                <div class="col video-item">
                    <a
                    href="javascript:void(0)"
                    
                  >
                    <div
                      class="rounded-img-10"
                      style="position: relative"
                    >
                  <iframe                     
                        width="100%"
                        height="150px"
                        id="video" src="{{ $videos[3]->url }}" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>

                    </div>

                    <p class="mt-2 d-flex">
                      <span class="film-svg"></span> {{ $videos[3]->title }}
                    </p>
                  </a>
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-body px-30">
                <!-- Video list -->
                <div class="col video-item">
                    <a
                    href="javascript:void(0)"
                    
                  >
                    <div
                      class="rounded-img-10"
                      style="position: relative"
                    >
                  <iframe                     
                        width="100%"
                        height="150px"
                        id="video" src="{{ $videos[4]->url }}" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>

                    </div>

                    <p class="mt-2 d-flex">
                      <span class="film-svg"></span> {{ $videos[4]->title }}
                    </p>
                  </a>
                </div>

              </div>
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination swiper-pagination-main"></div>
        </div>
      </div>



      

    </div>
  </section>