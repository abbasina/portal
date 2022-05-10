@extends('managerpanel.master')
@section('pageTitle')
پیام های من
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">پیام های من</li>
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
                                        <div class="col-sm-8"><h2>لیست <b>پیام های دریافتی</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route(auth()->user()->role->title.'.messages.create')}}">
                                            <button type="button" class="btn btn-green">ایجاد پیام</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>متن پیام</th>
                                            <th>ضمیمه پیام</th>
                                            <th>ساعت/تاریخ</th>
                                            <th>فرستنده</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                        <tr>
                                            <td>{{$message->id}}</td>
                                            <td>{{$message->msgbody}}</td>
                                            <td>@if($message->attachment)
                                                <a class="btn btn-success" href="{{ route(auth()->user()->role->title.'.messages.downloadattach',$message->id) }}">دانلود ضمیمه</a>
                                            @endif
                                                
                                                </td>
                                            <td>{{new verta($message->created_at,'Asia/Tehran','%B %d، %Y')}}</td>
                                           <td>{{ $message->fullname }}</td>
                                            <td>
                                                <a href="{{ route(auth()->user()->role->title.'.messages.show',$message->msg_id) }}" class="btn btn-primary" title="Add">مشاهده</a>
                                                



                                              
                                            </td>
                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                                {{$messages->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
