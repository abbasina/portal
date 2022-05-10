@extends('layouts.master')
 
@section('styles')
<link rel="stylesheet" href="./css/persian-datepicker.min.css">
<link rel="stylesheet" href="./css/pages/news.css">
@endsection
@section('pageTitle')
آرشیو اخبار
@endsection
@section('content')
<main class="container">
  <h1 class="fw-bold fs-24">آرشیو اخبار</h1>
  <div class="brudcrumbs my-3">
      <ul >
          <li>
              <a href="#">صفحه اصلی</a>
          </li>
          <li>
              <span> / </span>
          </li>
          <li>
              <a href="#">آرشیو اخبار </a>
          </li>

      </ul>
  </div>
  @include('layouts.errors')

  <form action="">

         <div class="row g-3">
             <div class="col-12 col-lg-3">
              <div class=" bg-white rounded-12">
                  <div class="row">
                    <div class="col-auto d-table">
                      <span class="v-center ps-4">دسته بندی ها</span>
                      <span class="v-center p-2">
                        <span class="border-end py-2 ps-2"></span>
                      </span>
                    </div>
                    <div class="col" style="margin-right: -1vw;">
                      
                    <select class="form-select py-3 border-0">
                      <option value="">عنوان دسته بندی</option>
                    </select>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-12 col-lg-2">
              <div class=" bg-white rounded-12">
                  <div class="row">
                    <div class="col-auto d-table">
                      <span class="v-center ps-4">از تاریخ</span>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="text" class="form-control py-3 border-0 datepicker">
                            <span class="input-group-text border-0" style="border-radius: 12px;">
                      <span class="calender-svg abs-center-left" style="top: 30%;"></span>

                            </span>
                          </div>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-12 col-lg-2">
              <div class=" bg-white rounded-12">
                  <div class="row">
                    <div class="col-auto d-table">
                      <span class="v-center ps-4">تا تاریخ</span>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="text" class="form-control py-3 border-0 datepicker">
                            <span class="input-group-text border-0" style="border-radius: 12px;">
                      <span class="calender-svg abs-center-left" style="top: 30%;"></span>

                            </span>
                          </div>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-12 col-lg-5">
              <div class=" bg-white rounded-12">

                  <div class="input-group input-group-sm border-0">
                    <input type="text" class="form-control border-0 py-3 ps-4"
                    
                    value="{{ $key }}"
                      
                    
                    placeholder="جستجو کنید">
                    <span class="input-group-text border-0" style="border-radius: 12px;">
                      <button class="btn">

                        <span role="button" class="search-svg"></span>
                      </button>
                      </span>
                </div>
              </div>
             </div>
         </div>
  </form>
  
        <!-- News -->
        <section id="news" class="mt-3">
         
          @foreach ($articles as $article )
          
          <div class="card mb-3">
            <div class="row g-0">
              
              <div class="col-md-3">
                <a href="{{ route('newsdetails',$article->id) }}">
                <img
                  src="{{ "/pngarchive/".$article->imageUrl }}"
                  class="card-img-right"
                  alt="{{ $article->slug }}"
                  loading="lazy"
                /></a>
              </div>
              
              <div class="col-md-9">
                
                <div class="card-body">
                  <a href="{{ route('newsdetails',$article->id) }}">
                  <h5 class="card-title my-0 my-lg-3 fw-bold fs-14">
                    {!! str_replace($key, '<strong class="bg-warning">'.$key.'</strong> ', $article->title) !!}  
                  </h5>
                  </a>
                  
                  <p class="card-text">
                    {!! str_replace($key, '<strong class="bg-warning">'.$key.'</strong> ', $article->description) !!}  
                  </p>
                  
                  <p class="card-text">
                      <a href="#" class="btn btn-sm btn-light rounded">
                      {{ $article->capitalname }}
                      </a>
                      <a href="#" class="btn btn-sm btn-light rounded">
                      {{ $article->comisionname }}
                      </a>

                    <span class="text-muted border-end px-2">
                      {{ new Verta($article->updated_at) }}
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach




                {{ $articles->links() }}
        </section>

</main>
@endsection
@section('scripts')
<script src="./js/persian-date.min.js"></script>
<script src="./js/persian-datepicker.min.js"></script>
@endsection
 