@extends('layouts.master')
@section('pageTitle')
ثبت نام
@endsection
@section('content')
<main class="container">
  <h1 class="main-title">ورود و ثبت نام</h1>
  <div class="brudcrumbs my-4">
    <ul >
        <li>
            <a href="#">صفحه اصلی</a>
        </li>
        <li>
            <span> / </span>
        </li>
        <li>
            <a href="#">ورود و ثبت نام</a>
        </li>

    </ul>
</div>
  <section class="mb-4">
      <div class="row g-4 d-flex justify-content-center">
        
        <div class="col-12 col-lg-4">
          
          <div class="card">
                 
                  
                 
             
              <div class="card-body">
                
                

                <div
                class=""
                id="verifyCodeModal"
              >
                <div class="">
                  <div class="border-radius-12">

                    <div class="">
                      @include('layouts.autherrors')
                      <form action="/verify" method="POST">
                        @csrf
                      <div class="text-center">
                        <img
                          src="/img/login.svg"
                          alt="Image"
                          loading="lazy"
                          class="img-fluid"
                        />
                        <h5 class="fw-bold fs-18 my-3">کد تایید</h5>
                        <p class="text-gray">کد ۵ رقمی به شماره شما ارسال شد</p>
                      </div>
                      <div class="bg-white border-radius-12 border">
                        <div class="input-group input-group-lg border-0">
                          <input
                            name="code"
                            type="numeric"
                            class="form-control form-control-lg py-3 border-0"
                            placeholder="کد تایید 5 رقمی"
                          />

                        </div>
                      </div>
          
                      <div class="text-center my-4">
                        <a
                          href="#"
                          style="border-bottom: 1px solid #197b30"
                          onclick="setTimer('timer')"
                          >دریافت مجدد کد</a
                        >
                      </div>
                      <button type="submit" class="btn btn-lg btn-green w-100 py-3">
                        ورود به سایت
                      </button>
                    </form>
                    </div>

                  </div>
                </div>
              </div>


              </div>
          </div>
      </div>
      </div>
  </section>

</main>
@endsection

    
   






            



 

