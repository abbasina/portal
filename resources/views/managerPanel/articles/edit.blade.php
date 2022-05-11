@extends('managerpanel.master')@section('styles')
<link href="/css/select2.min.css" rel="stylesheet" />
@endsection
@section('pageTitle')
   ویرایش خبر
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active"> ویرایش خبر</li>
    </ol>
  </section>
@endsection

@section('content')
    <main class="container">
        
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route(auth()->user()->role->title.'.articles')}}">
                        <button class="btn btn-success">بازگشت به آرشیو اخبار</button>
                    </a><hr>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.articles.updatecontent',$article->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mb-3 bg-white rounded-12 border form-group">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="title" class="form-control border-0 py-3"
                                            placeholder="تیتر خبر" value="{{ $article->title }}">

                                    </div>
                                </div><hr>

                                <div class="mb-3 bg-white rounded-12 border form-group">
                                    <div class="input-group input-group-sm">
                                        <textarea name="description" class="form-control border-0 py-3"
                                            placeholder="توضیح کوتاه">{{ $article->description }}</textarea>

                                    </div>
                                </div><hr>
                                <div class="form-group">
                                    <img src="{{ "/pngarchive/".$article->imageUrl }}">
                                    <label> عکس اندازه کوچک (177*277 پیکسل) </label>
                                    <br>
                                    <br>
                                    <input type="file" class="form-control-file" name="pngfile">
                                  </div><hr>

                                <div class="form-group">
                                    <label>انتخاب کمیسیون</label>
                                
                                    <select class="form-select form-select-lg mb-3 form-control optionselctor" name="comision">
                                        @foreach ($comisions as $comision)
                                        <option value="{{ $comision->id }}"
                                            @if($article->comision_id==$comision->id)
                                                {{ "selected" }}
                                            @endif
                                            >{{ $comision->name }}</option>
                                        @endforeach
                                        
                                        
                                    </select>
                                    </div><hr>
                                <div class="form-group">
                                    <label>انتخاب کلانشهر</label>
                                
                                    <select class="form-select form-select-lg mb-3 form-control optionselctor" name="capital">
                                        @foreach ($capitals as $capital)
                                        <option value="{{ $capital->id }}"
                                            @if($article->capital_id==$capital->id)
                                                {{ "selected" }}
                                            @endif
                                            >{{ $capital->name }}</option>
                                        @endforeach
                                        
                                        
                                    </select>
                                    </div><hr>
                                <div class="form-group">
                                    <label><strong>متن خبر :</strong></label>
                                    <textarea class="form-control" name="articlebody" id="articlebody">{{ $article->body }}</textarea>
                                </div>
                                <hr>
                                <div class="mb-3 bg-white rounded-12 border form-group">
                                    <div class="input-group input-group-sm">
                                        <textarea name="tags" class="form-control border-0 py-3"
                                            placeholder="کلمات کلید - هر کلمه کلیدی را با علامت | از هم جدا کنید">{{ $tags }}</textarea>

                                    </div>
                                </div><hr>
                                <input type="submit" class="w-100 btn btn-lg btn-success py-3" value="ویرایش خبر">
                               
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
        CKEDITOR.replace('articlebody',{
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

