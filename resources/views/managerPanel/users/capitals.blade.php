@extends('managerpanel.master')

@section('pageTitle')
مدیریت کاربران
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">مدیریت کاربران</li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">

        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-8"><h2>لیست <b>کلانشهرهای کاربر</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route(auth()->user()->role->title.'.users.addcapital',$user_id)}}">
                                            <button type="button" class="btn btn-green mb-2">افزودن کلانشهر برای کاربر</button>
                                            </a>
                                            <a href="{{ URL::previous() }}">
                                            <button type="button" class="btn btn-green mb-2">بازگشت</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>نام کلانشهر</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usercapitals as $usercapital)
                                        <tr>
                                            <td>{{$usercapital->id}}</td>
                                            <td>{{$usercapital->name}}</td>
                                            
                                            
                                           
                                            <td>


                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.users.delete',$usercapital->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                              
                                            </td>
                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
