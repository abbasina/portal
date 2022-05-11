@extends('managerpanel.master')

@section('pageTitle')
    ویرایش کاربر
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">ویرایش کاربر</li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">

        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route(auth()->user()->role->title.'.users')}}">
                        <button class="btn btn-success mb-3">بازگشت به لیست کاربران</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.users.update',$user->id) }}" method="POST" class="w-lg-50 mb-4">
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
                                <input type="submit" class="w-50 btn btn-lg btn-success py-3" value=" بروزرسانی کاربر ">
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
