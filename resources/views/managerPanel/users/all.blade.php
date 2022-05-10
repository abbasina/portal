@extends('managerpanel.master')
@section('pageTitle')
مدیریت کاربران
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">مدیریت کاربران    </li>
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
                                        <div class="col-sm-8"><h2>لیست <b>کاربران</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route(auth()->user()->role->title.'.users.create')}}">
                                            <button type="button" class="btn btn-green mb-2">افزودن کاربر</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>نام کاربر</th>
                                            <th>شماره موبایل</th>
                                            <th>نقش کاربری</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->fullname}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->role->label}}</td>
                                           
                                            <td>
                                                <a href="{{ route(auth()->user()->role->title.'.users.capitals',$user->id) }}" class="btn btn-success">کلانشهرها</a>
                                                <a href="{{ route(auth()->user()->role->title.'.users.edit',$user->id) }}" class="btn btn-primary">ویرایش</a>


                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.users.delete',$user->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                              
                                            </td>
                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                                {{$users->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
