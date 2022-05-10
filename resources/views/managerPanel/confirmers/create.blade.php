@extends('managerpanel.master')
@section('pageTitle')
    ایجاد کلانشهر جدید
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active"> ایجاد کلانشهر جدید</li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">
       
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route(auth()->user()->role->title.'.confirmers')}}">
                        <button class="btn btn-info">بازگشت به لیست کلانشهرها</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.confirmers.store') }}" method="POST" class="w-lg-50 mb-4">
                                @csrf


                                <div class="mb-3 bg-white rounded-12 border">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="title" class="form-control border-0 py-3"
                                            placeholder="نام کلانشهر ">

                                    </div>
                                </div>
                                <button class="w-100 btn btn-lg btn-green py-3">ایجاد کلانشهر جدید</button>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
