@extends('managerpanel.master')

@section('styles')
<link href="/css/select2.min.css" rel="stylesheet" />
@endsection
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
                        <button class="btn btn-success">بازگشت</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.messages.store') }}" method="POST" class="w-lg-50 mb-4" enctype="multipart/form-data">
                                @csrf


                                <div class="mb-3 bg-white rounded-12">
                                    <div class="input-group input-group-sm form-group">
                                        
                                        <textarea class="form-control d-block py-3" type="textarea" name="msgbody" 
                                            placeholder="متن پیام" rows="3"></textarea>


                                    </div>
                                        <br>
                                    <div class="form-group">
                                    <label>گیرنده</label>
                                
                                    <select class="form-select form-select-lg mb-3 form-control optionselctor" name="owner">
                                        @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                                        @endforeach
                                        
                                        
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label>ضمیمه پیام</label>
                                        <br>
                                        <br>
                                        <input type="file" class="form-control-file" name="attachment">
                                      </div>
                                    
                                </div>
                                <button class="w-100 btn btn-lg btn-success py-3">ایجاد پیام جدید</button>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@section('scripts')
<script src="/js/select2.min.js"></script>
<script>
$(document).ready(function() {
  $('.optionselctor').select2();
});
</script>
@endsection