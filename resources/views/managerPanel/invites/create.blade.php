@extends('layouts.master')
@section('styles')
<link href="/css/select2.min.css" rel="stylesheet" />
@endsection
@section('pageTitle')
    ایجاد کدمعرف جدید
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
                    <a href="#"> ایجاد کدمعرف جدید</a>
                </li>

            </ul>
        </div>
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route(auth()->user()->role->title.'.invites')}}">
                        <button class="btn btn-green mb-1">بازگشت به لیست کدهای معرف</button>
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
                                <button class="w-100 btn btn-lg btn-green py-3  mt-3">ایجاد کدمعرف جدید</button>
                               
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
