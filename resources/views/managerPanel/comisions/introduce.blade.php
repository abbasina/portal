@extends('managerpanel.master')
@section('pageTitle')
    ویرایش معرفی کمیسیون
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">ویرایش معرفی کمیسیون</li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">
     
        <section class="">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route(auth()->user()->role->title.'.comisions')}}">
                        <button class="btn btn-success ">بازگشت به لیست کمیسیون ها</button>
                    </a>
                    <br><br>
                    <div class="card">
                        <div class="card-body">
                            <div class="box">
                            <div class="box-body">
                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.comisions.editintro',$comision->id) }}" method="POST" class="mb-4" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <label class="">معرفی کمیسیون:</label>
                                <div class="form-group">
                                    
                                   
                                    
                                        <textarea name="introduce" id="introduce">{{ $comision->introduce  }}</textarea>
                                        

                                    
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">نام رئیس کمیسیون</label>
                                        <input type="text" row="6" name="boss" class="form-control"
                                             value="{{ $comision->boss }}">
                                        

                                    
                                </div>
                                <div class="form-group">
                                <label>تصویر رئیس کمیسیون</label>
                                <input type="file" class="form-control -file" name="boss_image">
                                </div>
                               
                                <div class="form-group">
                                    <label class="">بیوگرافی رئیس کمیسیون</label>
                                        <textarea rows="8" name="boss_bio" class="form-control"
                                             >{{ $comision->boss_bio }}</textarea>
                                        

                                   
                                </div>
                                <div class="form-group">
                                    <label class="">نام دبیر کمیسیون</label>
                                        <input type="text"  name="chief" class="form-control"
                                             value="{{ $comision->chief }}">
                                        

                                    
                                </div>
                                <div class="form-group">
                                <label>تصویر دبیر کمیسیون</label>
                                <input type="file" class="-file  form-control" name="chief_image">
                                </div>
                                <div class="form-group">
                                    <label class="">بیوگرافی دبیر کمیسیون</label>
                                        <textarea class="form-control" rows="8" name="chief_bio" class=" border-0 py-3"
                                             >{{ $comision->chief_bio }}</textarea>
                                        

                                   
                                </div>


                                <button class="btn btn-success pull-left">بروزرسانی معرفی کمیسیون</button>
                                </div>
                                <div class="col-md-6">
                                    @if($comision->boss_image!=null)
                                    <div class="form-gruop w-100">
                                    <label>تصویر ريیس کمیسیون</label><br>
                                    <img src="/comisions/{{ $comision->boss_image }}">
                                    </div><br>
                                    @endif
                                    @if($comision->boss_image!=null)
                                    <div class="form-gruop">
                                    <label>تصویر دبیر کمیسیون</label><br>
                                    <img src="/comisions/{{ $comision->chief_image }}">
                                    </div>
                                    @endif
                                </div>
                            </form>
                            </div>
                            </div>

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
            filebrowserUploadMethod: 'form',
            language : "fa"
        })
    </script>
    
    <script src="/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
      $('.optionselctor').select2();
    });
    </script>
    
@endsection
