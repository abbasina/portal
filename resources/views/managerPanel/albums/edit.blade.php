@extends('managerpanel.master')
@section('pageTitle')
    ویرایش نام آلبوم
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active"> ویرایش نام آلبوم</li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">
        
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route(auth()->user()->role->title.'.albums')}}">
                        <button class="btn btn-success">بازگشت به لیست آلبومها</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.albums.update',$album->id) }}" method="POST" class="w-lg-50 mb-4">
                                @csrf
                                @method('put')


                                <div class="mb-3 bg-white rounded-12 border">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="title" class="form-control border-0 py-3"
                                            placeholder="نام آلبوم" value="{{ $album->title }}">

                                        <input type="hidden" name="album_id" value="{{ $album->id }}">

                                    </div>
                                </div>
                                <div class="mb-3 bg-white rounded-12 border">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="photographer" class="form-control border-0 py-3"
                                            placeholder="عکاس" value="{{ $album->photographer }}">


                                    </div>
                                </div>
                                <button class="w-100 btn btn-lg btn-success py-3">بروزرسانی آلبوم</button>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
