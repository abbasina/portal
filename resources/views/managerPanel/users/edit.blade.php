@extends('layouts.master')

@section('pageTitle')
    ویرایش کاربر
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
                    <a href="#">ویرایش کاربر {{ $user->fullname }}</a>
                </li>

            </ul>
        </div>
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route('manager.users')}}">
                        <button class="btn btn-green mb-3">بازگشت به لیست کاربران</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route('manager.users.update',$user->id) }}" method="POST" class="w-lg-50 mb-4">
                                @csrf
                                @method('put')

                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <div class="mb-3">
                                    <label class="mb-3"> نام و نام خانوادگی </label>
                                    <div class="mb-3 bg-white rounded-12 border form-group">
                                        
                                        <div class="input-group input-group-sm">
                                            
                                            <input type="text" name="fullname" class="form-control border-0 py-3"
                                                value="{{ $user->fullname }}">
    
                                        </div>
                                    </div>
                                    <label class="mb-3">شماره موبایل</label>
                                    <div class="mb-3 bg-white rounded-12 border form-group">
                                        
                                        <div class="input-group input-group-sm">
                                            
                                            <input type="text" name="phone" class="form-control border-0 py-3"
                                                value="{{ $user->phone }}">
    
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>نقش کاربری </label>
                                    
                                        <select class="form-select form-select-lg mb-3 form-control optionselctor mb-3" name="role">
                                            <option value="2">سردبیر</option>
                                            <option value="3">تایید کننده</option>
                                            <option value="4">خبرنگار</option>
                                            <option value="5">عادی</option>
                                            <option value="6">عضو مجمع</option>
                                            
                                            
                                        </select>
                                        </div>

                                    </div>
                                </div>
                                <input type="submit" class="w-50 btn btn-lg btn-green py-3" value=" بروزرسانی کاربر ">
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
