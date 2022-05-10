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
                    <a href="{{route(auth()->user()->role->title.'.users')}}">
                        <button class="btn btn-green mb-3">بازگشت به لیست کاربران</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.users.addcapitaluser',$user->id) }}" method="POST" class="w-lg-50 mb-4">
                                @csrf
                                @method('put')

                                
                                <div class="mb-3">
                                
                                    <div class="form-group">
                                        <label class="mb-3">افزودن کلانشهر به کاربر __ {{ $user->fullname }}</label>
                                    
                                        <select class="form-select form-select-lg mb-3 form-control optionselctor mb-3" name="capital_id">
                                            @foreach ($diffcapitals as $capitalkey => $capitanlname)
                                                
                                            
                                            <option value="{{ $capitalkey }}">{{ $capitanlname }}</option>

                                            @endforeach
                                            
                                        </select>
                                        </div>

                                    </div>
                                </div>
                                <input type="submit" class="w-50 btn btn-lg btn-green py-3" value="بروزرسانی کلانشهرهای کاربر">
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
