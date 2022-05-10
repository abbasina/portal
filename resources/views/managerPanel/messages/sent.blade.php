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
                                        <div class="col-sm-8"><h2>لیست <b>پیام های ارسالی</b></h2></div>
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
                                            <th>گیرنده</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                        <tr>
                                            <td>{{$message->msg_id}}</td>
                                            <td>{{$message->msgbody}}</td>
                                            <td>
                                            @if($message->attachment)
                                                <a class="btn btn-success" href="{{ route(auth()->user()->role->title.'.messages.downloadattach',$message->msg_id) }}">دانلود ضمیمه</a>
                                            @endif
                                                
                                                </td>
                                            <td>{{new verta($message->created_at,'Asia/Tehran')}}</td>
                                            <td>{{ $message->fullname }}</td>
                                            <td>
                                                <a href="{{ route(auth()->user()->role->title.'.messages.show',$message->msg_id) }}" class="btn btn-primary" title="Add">مشاهده</a>
                                                <a href="{{ route(auth()->user()->role->title.'.messages.edit',$message->msg_id) }}" class="btn btn-warning" title="Add">ویرایش</a>
                     

                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.messages.delete',$message->msg_id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                              
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
