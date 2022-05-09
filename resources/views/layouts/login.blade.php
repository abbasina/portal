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
                        src="/img/login.svg"
                        alt="Image"
                        loading="lazy"
                        class="img-fluid"
                      />
                      <h5 class="fw-bold fs-18 my-4">ورود به حساب کاربری
                      </h5>
                      <p class="text-gray">
                        اگر قبلا ثبت نام کرده اید، وارد حساب کاربری خود شوید
                      </p>
                      
                    </div>
                  </div>
          
                  <div class="">
                    @include('layouts.autherrors')
                    <form action="/login" method="POST">
                      @csrf

                      <div class="mb-4">
                        <input
                          type="text"
                          name="phone"
                          class="form-control form-control-lg py-4"
                          placeholder="شماره همراه"
                        />
                      </div>

        
        
                      <button type="submit" class="btn btn-lg btn-green w-100 py-3">
                       ادامه
                      </button>
                      
                    </form>
                  </div>
                  <div class="modal-footer">
                    <div class="text-center">
                      <p class="text-gray">
                        قبلا ثبت نام نکرده اید؟
                        <a href="{{ route('showregister') }}" class="text-dark fw-bold">ثبت نام</a
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

    
   






            



 

