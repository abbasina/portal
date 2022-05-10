@extends('managerpanel.master')
@section('pageTitle')
مدیریت آلبومها
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">مدیریت آلبومها</li>
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
                                        <div class="col-sm-8"><h2>لیست <b>آلبومها</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route(auth()->user()->role->title.'.albums.create')}}">
                                            <button type="button" class="btn btn-green">افزودن آلبوم</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>نام آلبوم</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($albums as $album)
                                        <tr>
                                            <td>{{$album->id}}</td>
                                            <td>{{$album->title}}</td>
                                            <td>
                                                <a href="{{ route(auth()->user()->role->title.'.albums.upload',$album->id) }}" class="btn btn-success" title="Add">آپلود تصاویر</a>
                                                <a href="{{ route(auth()->user()->role->title.'.albums.edit',$album->id) }}" class="btn btn-primary" title="Add">ویرایش</a>


                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.albums.delete',$album->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                              
                                            </td>
                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                                {{$albums->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
