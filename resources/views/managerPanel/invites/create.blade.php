@extends('managerpanel.master')
@section('styles')
<link href="/css/select2.min.css" rel="stylesheet" />
@endsection
@section('pageTitle')
    ایجاد کدمعرف جدید
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">ایجاد کدمعرف جدید</li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">
      
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route(auth()->user()->role->title.'.invites')}}">
                        <button class="btn btn-success mb-1">بازگشت به لیست کدهای معرف</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.invites.store') }}" method="POST" class="w-lg-50 mb-4">
                                @csrf


                                <div class="form-group mt-3">
                                    <label>نقش کاربری</label>
                                
                                    <select class="form-select form-select-lg mb-3 form-control optionselctor" name="role_id">
                                        @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->label }}</option>
                                        @endforeach
                                        
                                        
                                    </select>
                                    </div>
                                <button class="w-100 btn btn-lg btn-success py-3  mt-3">ایجاد کدمعرف جدید</button>
                               
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
