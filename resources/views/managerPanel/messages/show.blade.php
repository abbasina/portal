@extends('layouts.master')

@section('pageTitle')
پیام های من
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
                    <a href="#">پیام های من</a>
                </li>

            </ul>
        </div>
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
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>متن پیام</th>
                                            <th>ضمیمه پیام</th>
                                            <th>ساعت/تاریخ</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>{{$body->id}}</td>
                                            <td>{{$body->msgbody}}</td>
                                            <td>
                                            @if($body->attachment)
                                                <a class="btn btn-success" href="{{ route(auth()->user()->role->title.'.messages.downloadattach',$body->id) }}">دانلود ضمیمه</a>
                                            @endif
                                                
                                                </td>
                                            <td>{{new verta($body->created_at,'Asia/Tehran','%B %d، %Y')}}</td>
                                           

                                        </tr>    
                                        
    
                                    </tbody>
                                </table>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
