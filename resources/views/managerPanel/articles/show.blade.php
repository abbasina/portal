@extends('managerpanel.master')
@section('pageTitle')
مشاهده خبر
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">مشاهده خبر</li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">
        
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-8"><h2>لیست <b>پیام ها</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{redirect()->back()->getTargetUrl()}}">
                                            <button type="button" class="btn btn-green">بازگشت</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>شناسه خبر</td>
                                            <td>{{$article->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>تیتر خبر</td>
                                            <td>{{$article->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>توضیح کوتاه</td>
                                            <td>{{$article->description}}</td>
                                        </tr>
                                        <tr>
                                            <td>عکس کوچک</td>
                                            <td>{{$article->imageUrl}}</td>
                                        </tr>
                                        <tr>
                                            <td>کمیسیون</td>
                                            <td>{{$article->comision_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>کلانشهر</td>
                                            <td>{{$article->capital_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>متن خبر</td>
                                            <td>{{$article->body}}</td>
                                        </tr>
                                        <tr>
                                            <td>کلمات کلیدی</td>
                                            <td>{{$article->tags_id}}</td>
                                        </tr>
                                    
                                    
                                        
                                        <tr>
                                            <td>تاریخ انتشار</td>
                                          
                                            <td>{{new verta($article->updated_at)}}</td>
                                           

                                        </tr>    
                                        
    
                                    </tbody>
                                </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
