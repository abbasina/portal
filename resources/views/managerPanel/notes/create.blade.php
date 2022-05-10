@extends('managerpanel.master')@section('styles')
<link href="/css/select2.min.css" rel="stylesheet" />
@endsection
@section('pageTitle')
    ایجاد یادداشت جدید
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">    ایجاد یادداشت جدید
    </li>
    </ol>
  </section>
@endsection

@section('content')
    <main class="container">
       
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route(auth()->user()->role->title.'.notes')}}">
                        <button class="btn btn-green">بازگشت به آرشیو یادداشت ها</button>
                    </a><hr>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.notes.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 bg-white rounded-12 border form-group">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="title" class="form-control border-0 py-3"
                                            placeholder="تیتر یادداشت" value="{{ old('title')  }}">

                                    </div>
                                </div><hr>

                                <div class="mb-3 bg-white rounded-12 border form-group">
                                    <div class="input-group input-group-sm">
                                        <textarea name="description" class="form-control border-0 py-3"
                                            placeholder="توضیح کوتاه">{{ old('description')  }}</textarea>

                                    </div>
                                </div><hr>
                                <div class="form-group">
                                    <label> عکس اندازه کوچک (177*277 پیکسل) </label>
                                    <br>
                                    <br>
                                    <input type="file" class="form-control-file" name="pngfile">
                                  </div><hr>

                                <div class="form-group">
                                    <label><strong>متن یادداشت :</strong></label>
                                    <textarea class="form-control" name="notebody" id="notebody">{{ old('notebody')  }}</textarea>
                                </div>
                                <hr>
                                <div class="mb-3 bg-white rounded-12 border form-group">
                                    <div class="input-group input-group-sm">
                                        <textarea name="tags" class="form-control border-0 py-3"
                                            placeholder="کلمات کلید - هر کلمه کلیدی را با علامت | از هم جدا کنید">{{ old('tags')  }}</textarea>

                                    </div>
                                </div><hr>
                                <input type="submit" class="w-100 btn btn-lg btn-green py-3" value="ایجاد یادداشت جدید">
                               
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
        CKEDITOR.replace('notebody',{
            filebrowserUploadUrl: "{{route('notes.ckeditor.upload', ['_token' => csrf_token() ])}}",
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

