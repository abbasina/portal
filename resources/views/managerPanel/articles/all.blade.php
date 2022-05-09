@extends('layouts.master')

@section('pageTitle')
مدیریت اخبار
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
                    <a href="#">مدیریت اخبار</a>
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
                                        <div class="col-sm-8"><h2>لیست <b>اخبار</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route('manager.articles.create')}}">
                                            <button type="button" class="btn btn-green mb-2">ایجاد خبر</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>تیتر خبر</th>
                                            <th>وضعیت تایید</th>
                                            <th>وضعیت انتشار</th>
                                            <th>نام کلانشهر</th>
                                            <th>عنوان کمیسیون</th>
                                            <th>تعداد بازدید</th>
                                            <th>تعداد نظرات</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article)
                                        <tr>
                                            <td>{{$article->id}}</td>
                                            <td>{{$article->title}}</td>
                                            <td>{{$article->confirm}}</td>
                                            <td>{{$article->publish}}</td>
                                            <td>{{$article->capitalname}}</td>
                                            <td>{{$article->comisionname}}</td>
                                            <td>{{$article->viewCount}}</td>
                                            <td>{{$article->commentCount}}</td>
                                            <td>
                                                
                                                
                                                    
                                                
                                                    @can('confirm')
                                                        
                                                    
                                               
                                                @if ($article->confirm=='0')
                                                    
                                                
                                                <form class="d-inline" action="{{route('manager.articles.confirm',$article->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-success text-nowrap" type="submit">تایید خبر</button>
                                                </form><hr>
                                                @else
                                                <form class="d-inline" action="{{route('manager.articles.unconfirm',$article->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-warning text-nowrap" type="submit">عدم تایید خبر</button>
                                                </form><hr>                                               
                                                @endif
                                                @endcan

                                                @can('chief')
                                                    
                                                
                                                @if ($article->publish=='0')
                                                    
                                                
                                                <form class="d-inline" action="{{route('manager.articles.publish',$article->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-success text-nowrap" type="submit">انتشار خبر</button>
                                                </form><hr>
                                                @else
                                                <form class="d-inline" action="{{route('manager.articles.unpublish',$article->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-warning text-nowrap" type="submit">عدم انتشار خبر</button>
                                                </form><hr>                                               
                                                @endif
                                                @endcan


                                                
                                                    
                                                
                                                    
                                                

                                                <a href="{{ route('manager.articles.showarticle',$article->id) }}" class="btn btn-primary">مشاهده</a>
                                                <hr>
                                                @if(!$article->confirm)
                                                <a href="{{ route('manager.articles.edit',$article->id) }}" class="btn btn-warning">ویرایش</a>
                                                <hr>
                                                @can('editconfirmed')
                                                @if($article->confirm)
                                                <a href="{{ route('manager.articles.edit',$article->id) }}" class="btn btn-warning">ویرایش</a>
                                                <hr>
                                                @endif
                                                @endcan
                                                @endif

                                                @can('manage')
                                                    
                                                
                                                <form class="d-inline" action="{{route('manager.articles.delete',$article->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                                @endcan
                                            </td>
                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                                </div>
                                {{$articles->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
