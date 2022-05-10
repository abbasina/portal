@extends('managerpanel.master')
@section('pageTitle')
مشاهده خبر
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">مشاهده خبر    </li>
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
                                        <div class="col-sm-8"><h2>مشاهده <b>یادداشت</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{redirect()->back()->getTargetUrl()}}">
                                            <button type="button" class="btn btn-green">بازگشت</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <style>
                                        table img{width: 100%;}
                                        
                                    </style>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>شناسه خبر</td>
                                            <td>{{$note->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>تیتر خبر</td>
                                            <td>{{$note->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>توضیح کوتاه</td>
                                            <td>{{$note->description}}</td>
                                        </tr>
                                        <tr>
                                            <td>عکس کوچک</td>
                                            <td>{{$note->imageUrl}}</td>
                                        </tr>
                                        <tr>
                                            <td>متن یادداشت</td>
                                            <td>{!! $note->notebody!!}</td>
                                        </tr>
                                        <tr>
                                            <td>کلمات کلیدی</td>
                                            <td>
                                                @foreach (explode("|",$note->tag->tags) as $tag)
                                                    <strong class="alert alert-info">{{ $tag }}</strong>
                                                @endforeach
                                            
                                            </td>
                                        </tr>
                                    
                                    
                                        
                                        <tr>
                                            <td>تاریخ آخرین ویرایش</td>
                                          
                                            <td>{{new verta($note->updated_at)}}</td>
                                           

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
