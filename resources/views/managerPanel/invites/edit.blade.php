@extends('layouts.master')

@section('pageTitle')
    ویرایش نام کمیسیون
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
                    <a href="#">ویرایش نام کمیسیون {{ $comision->name }}</a>
                </li>

            </ul>
        </div>
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{route('manager.comisions')}}">
                        <button class="btn btn-info">بازگشت به لیست کمیسیون ها</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route('manager.comisions.update',$comision->id) }}" method="POST" class="w-lg-50 mb-4">
                                @csrf
                                @method('put')


                                <div class="mb-3 bg-white rounded-12 border">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="title" class="form-control border-0 py-3"
                                            placeholder="نام کلانشهر" value="{{ $comision->name }}">
                                        <input type="hidden" name="comision_id" value="{{ $comision->id }}">

                                    </div>
                                </div>
                                <button class="w-100 btn btn-lg btn-green py-3">بروزرسانی کمیسیون</button>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
