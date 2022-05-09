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
                
                
                  <div class="row text-center">
                    
                    <div class="">
                      <div class="border-radius-12">
                        <div class="modal-header">
                    <div class="w-100">
                      <img
                        src="/img/register.svg"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid"
                      />
                      <h5 class="fw-bold fs-18 my-4">عضویت در سایت</h5>
                      <p class="text-gray">
                        در زمانی کوتاه یک حساب کاربری برای خود بسازید
                      </p>
                      
                    </div>
                  </div>
          
                  <div class="">
                    @include('layouts.autherrors')
                    <form action="/register" method="POST">
                      @csrf
                      <div class="mb-4">
                        <input
                          type="text"
                          name="fullname"
                          class="form-control form-control-lg py-4"
                          placeholder="نام و نام خانوادگی"
                        />
                      </div>
                      <div class="mb-4">
                        <input
                          type="text"
                          name="phone"
                          class="form-control form-control-lg py-4"
                          placeholder="شماره همراه"
                        />
                      </div>
                      <div class="mb-4">
                        <input
                          type="text"
                          name="inviteCode"
                          class="form-control form-control-lg py-4"
                          placeholder="کد معرف"
                        />
                      </div>
        
        
                      <div class="my-4 form-check">
                        <input type="checkbox" class="form-check-input" id="rules" />
                        <label class="form-check-label" for="rules"
                          >قوانین و مقررات سایت را می پذیرم</label
                        >
                      </div>
                      <button type="submit" class="btn btn-green btn-lg w-100 py-3">
                        ثبت عضویت
                      </button>
                      
                    </form>
                  </div>
                  <div class="modal-footer">
                    <div class="text-center">
                      <p class="text-gray">
                        قبلا ثبت نام کرده اید؟
                        <a href="{{ route('showlogin') }}" class="text-dark fw-bold">ورود</a
                        >
                      </p>
                    </div>
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

    
   






            



 

