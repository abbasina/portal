@extends('managerpanel.master')
@section('pageTitle')
    ویرایش کاربر
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">    ویرایش کاربر    </li>
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
