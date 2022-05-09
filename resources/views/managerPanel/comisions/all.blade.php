@extends('layouts.master')

@section('pageTitle')
مدیریت کمیسیون ها (دسته بندی ها )
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
                    <a href="#"> مدیریت کمیسیون ها (دسته بندی ها )</a>
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
                                        <div class="col-sm-8"><h2>لیست <b>کمیسیون ها</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route('manager.comisions.create')}}">
                                            <button type="button" class="btn btn-green">افزودن کمیسیون</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>نام کمیسیون</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comisions as $comision)
                                        <tr>
                                            <td>{{$comision->id}}</td>
                                            <td>{{$comision->name}}</td>
                                            <td>
                                                <a href="{{ route('manager.comisions.introduce',$comision->id) }}" class="btn btn-success">معرفی</a>
                                                <a href="{{ route('manager.comisions.edit',$comision->id) }}" class="btn btn-primary">ویرایش</a>


                                                <form class="d-inline" action="{{route('manager.comisions.delete',$comision->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                              
                                            </td>
                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                                {{$comisions->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
