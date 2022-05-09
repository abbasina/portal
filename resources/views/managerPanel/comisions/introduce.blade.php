@extends('layouts.master')

@section('pageTitle')
    ویرایش معرفی کمیسیون
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
                    <a href="#">ویرایش نام کمیسیون {{ $comision->name }}</a>
                </li>

            </ul>
        </div>
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route('manager.comisions')}}">
                        <button class="btn btn-green mb-3">بازگشت به لیست کمیسیون ها</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route('manager.comisions.update',$comision->id) }}" method="POST" class="mb-4">
                                @csrf
                                @method('put')

                                <label class="mb-3">معرفی کمیسیون:</label>
                                <div class="mb-3 bg-white rounded-12 border">
                                    
                                    <div class="input-group input-group-sm">
                                        
                                        <textarea class="form-control" name="introduce" id="introduce">{{ old('introduce')  }}</textarea>
                                        <input type="hidden" name="comision_id" value="{{ $comision->id }}">

                                    </div>
                                </div>
                                <div class="mb-3 bg-white rounded-12 border">
                                    <div class="input-group input-group-sm">
                                        <input type="text" row="6" name="boss" class="form-control border-0 py-3"
                                            placeholder="نام رئیس کمیسیون" value="{{ $comision->boss }}">
                                        

                                    </div>
                                </div>
                                <label class="d-block mb-3">تصویر رئیس کمیسیون</label>
                                <input type="file" class="form-control-file mb-3" name="boss-image">
                                <div class="mb-3 bg-white rounded-12 border">
                                    <div class="input-group input-group-sm">
                                        <textarea row="6" name="boss-bio" class="form-control border-0 py-3"
                                            placeholder="بیوگرافی رئیس کمیسیون" value="{{ $comision->name }}"></textarea>
                                        

                                    </div>
                                </div>
                                <div class="mb-3 bg-white rounded-12 border">
                                    <div class="input-group input-group-sm">
                                        <input type="text" row="6" name="chief" class="form-control border-0 py-3"
                                            placeholder="نام دبیر کمیسیون" value="{{ $comision->chief }}">
                                        

                                    </div>
                                </div>
                                <label class="d-block mb-3">تصویر دبیر کمیسیون</label>
                                <input type="file" class="form-control-file mb-3" name="chief-image">
                                <div class="mb-3 bg-white rounded-12 border">
                                    <div class="input-group input-group-sm">
                                        <textarea row="6" name="chief-bio" class="form-control border-0 py-3"
                                            placeholder="بیوگرافی دبیر کمیسیون" value="{{ $comision->name }}"></textarea>
                                        

                                    </div>
                                </div>


                                <div class="mb-3 bg-white rounded-12">
                                    <div class="input-group input-group-sm">
                                        <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data"  class="mt-3 mb-3">
                                            @include('layouts.errors')
                                            <div class="form-group d-inline">
                                                <label for="">کمیته ها</label><br>
                                                <input type="file" name="image[]"  accept="image/png, image/jpeg, image/jpg, image/gif" multiple/><br>
                                                <input type="text" name="title" placeholder="توضیح عکس(اختیاری)"/>

                                                <input type="hidden" name="album_id" value="{">
                
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-success" style="margin-bottom: 0px;"> آپلود تصویر</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <button class="w-100 btn btn-lg btn-green py-3">بروزرسانی معرفی کمیسیون</button>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@section('scripts')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('introduce',{
            filebrowserUploadUrl: "{{route('articles.ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        })
    </script>
    
    <script src="/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
      $('.optionselctor').select2();
    });
    </script>
    
@endsection
