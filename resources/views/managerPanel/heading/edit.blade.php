@extends('layouts.master')

@section('pageTitle')
     مدیریت تیتر یک
@endsection

@section('content')
    <main class="container">
        <h1 class="main-title"> پنل مدیریت</h1>
        <div class="brudcrumbs my-3">
            <ul>
                <li>
                    <a href="#">پنل مدیریت</a>
                </li>
                <li>
                    <span> / </span>
                </li>
                <li>
                    <a href="#">ویرایش تیتر یک صفحه اصلی صفحه اصلی </a>
                </li>

            </ul>
        </div>
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{!! url()->previous(); !!}  ">
                        <button class="btn btn-green mb-3">بازگشت</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route('manager.heading.update') }}" method="POST" class="w-lg-50 mb-4">
                                @csrf
                                @method('put')

                                
                                <div class="mb-3">

                                        

                                        
                                            
                                        <label class="mb-3">شناسه خبر</label>
                                        <div class="mb-3 bg-white rounded-12 border form-group">
                                        <div class="input-group input-group-sm">
                                            
                                            <input type="text" name="article_id" class="form-control border-0 py-3"
                                                value="{{ $heading->article_id }}">
    
                                        </div>
                                    </div>
                                        <label class="mb-3">لینک تصویر</label>
                                        <div class="mb-3 bg-white rounded-12 border form-group">
                                        <div class="input-group input-group-sm">
                                            
                                            <input type="text" name="image" class="form-control border-0 py-3"
                                                value="{{ $heading->image }}">
    
                                        </div>
                                    </div>



                                
                                        

                                    </div>
                                <input type="submit" class="w-50 btn btn-lg btn-green py-3" value="بروزرسانی تیتر یک">
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
