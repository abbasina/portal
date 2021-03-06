@extends('managerpanel.master')
@section('pageTitle')
    ویرایش اطلاعات خبرنگار
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">    ویرایش اطلاعات خبرنگار    </li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">
       
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route(auth()->user()->role->title.'.reporters')}}">
                        <button class="btn btn-info">بازگشت به لیست خبرنگاران</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.reporters.update',$reporter->id) }}" method="POST" class="w-lg-50 mb-4">
                                @csrf
                                @method('put')


                                <div class="mb-3 bg-white rounded-12 border">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="title" class="form-control border-0 py-3"
                                            placeholder="نام کلانشهر" value="{{ $reporter->name }}">
                                        <input type="hidden" name="reporter_id" value="{{ $reporter->id }}">

                                    </div>
                                </div>
                                <button class="w-100 btn btn-lg btn-success py-3">بروزرسانی اطلاعات خبرنگار</button>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
