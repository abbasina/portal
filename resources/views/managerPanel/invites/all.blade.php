@extends('layouts.master')

@section('pageTitle')
مدیریت کدهای معرف
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
                    <a href="#">مدیریت کدهای معرف</a>
                </li>

            </ul>
        </div>
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
                                        <div class="col-sm-8"><h2>لیست <b>کدهای معرف</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route(auth()->user()->role->title.'.invites.create')}}">
                                            <button type="button" class="btn btn-green">ایجاد کدمعرف</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>کدمعرف</th>
                                            <th>شناسه کاربر</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($invites as $invite)
                                        <tr>
                                            <td>{{$invite->id}}</td>
                                            <td>{{$invite->Code}}</td>
                                            <td>{{is_Null($invite->user_id)? "غیرفعال":$invite->user_id}}</td>
                                            <td>


                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.invites.delete',$invite->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                              
                                            </td>
                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                                {{$invites->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
