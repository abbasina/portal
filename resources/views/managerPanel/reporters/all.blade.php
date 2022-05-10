@extends('layouts.master')

@section('pageTitle')
مدیریت خبرنگاران
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
                    <a href="#">مدیریت خبرنگاران</a>
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
                                        <div class="col-sm-8"><h2>لیست <b>کلانشهرها</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route(auth()->user()->role->title.'.reporters.create')}}">
                                            <button type="button" class="btn btn-info">افزودن کلانشهر</button>
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
                                        @foreach ($reporters as $reporter)
                                        <tr>
                                            <td>{{$reporter->id}}</td>
                                            <td>{{$reporter->name}}</td>
                                            <td>
                                                <a href="{{ route(auth()->user()->role->title.'.reporters.edit',$reporter->id) }}" class="btn btn-primary" title="Add">ویرایش</a>


                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.reporters.delete',$reporter->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                              
                                            </td>
                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                                {{$reporters->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
