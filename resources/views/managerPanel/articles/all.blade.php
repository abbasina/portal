@extends('managerpanel.master')
@section('styles')
<link rel="stylesheet" href="/panel/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('pageTitle')
مدیریت اخبار
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">مدیریت اخبار
    </li>
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
                                        <div class="col-sm-8"><h2>لیست <b>اخبار</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route(auth()->user()->role->title.'.articles.create')}}">
                                            <button type="button" class="btn btn-success mb-2">ایجاد خبر</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div class="box">
                                        <div class="box-body">
        
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
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
                                                    
                                                
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.articles.confirm',$article->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-success text-nowrap" type="submit">تایید خبر</button>
                                                </form><hr>
                                                @else
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.articles.unconfirm',$article->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-warning text-nowrap" type="submit">عدم تایید خبر</button>
                                                </form><hr>                                               
                                                @endif
                                                @endcan

                                                @can('chief')
                                                    
                                                
                                                @if ($article->publish=='0')
                                                    
                                                
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.articles.publish',$article->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-success text-nowrap" type="submit">انتشار خبر</button>
                                                </form><hr>
                                                @else
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.articles.unpublish',$article->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-warning text-nowrap" type="submit">عدم انتشار خبر</button>
                                                </form><hr>                                               
                                                @endif
                                                @endcan


                                                
                                                    
                                                
                                                    
                                                

                                                <a href="{{ route(auth()->user()->role->title.'.articles.showarticle',$article->id) }}" class="btn btn-primary">مشاهده</a>
                                                <hr>
                                                @if(!$article->confirm)
                                                <a href="{{ route(auth()->user()->role->title.'.articles.edit',$article->id) }}" class="btn btn-warning">ویرایش</a>
                                                <hr>
                                                @can('editconfirmed')
                                                @if($article->confirm)
                                                <a href="{{ route(auth()->user()->role->title.'.articles.edit',$article->id) }}" class="btn btn-warning">ویرایش</a>
                                                <hr>
                                                @endif
                                                @endcan
                                                @endif

                                                @can('manage')
                                                    
                                                
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.articles.delete',$article->id)}}" method="POST">
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
                                    </div></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@section('scripts')

<script src="/panel/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/panel/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
      $('#example2').DataTable()
      $('#example1').DataTable({
        'paging'      : false,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : false,
        'autoWidth'   : true,

        'language': {
            searchPlaceholder: "فیلترسازی",
            search: ' <i class="fa fa-search"></i> ',
            infoEmpty: "رکوردی در دسترس نیست",
            zeroRecords: "رکوردی یافت نشد",


      },
     
      })
    })
  </script>
@endsection