@extends('managerpanel.master')
@section('pageTitle')
    ایجاد پیام جدید
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">ایجاد پیام جدید</li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">
        
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{redirect()->back()->getTargetUrl()}}">
                        <button class="btn btn-green">بازگشت</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.messages.update', $message->id ) }}" method="POST" class="w-lg-50 mb-4" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="mb-3 bg-white rounded-12">
                                    <div class="input-group input-group-sm form-group">
                                        
                                        <textarea class="form-control d-block py-3" type="textarea" name="msgbody" 
                                            placeholder="متن پیام" rows="3">{{ $message->msgbody }}</textarea>


                                    </div>
                                        


                                    
                                </div>
                                <button class="w-100 btn btn-lg btn-green py-3">ویرایش پیام</button>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
