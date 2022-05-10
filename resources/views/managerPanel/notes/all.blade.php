@extends('managerpanel.master')
@section('pageTitle')
مدیریت یادداشت ها
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">مدیریت یادداشت ها    </li>
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
                                        <div class="col-sm-8"><h2>لیست <b>یادداشت ها</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route(auth()->user()->role->title.'.notes.create')}}">
                                            <button type="button" class="btn btn-green mb-2">ایجاد یادداشت</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>عنوان یادداشت</th>
                                            <th>وضعیت تایید</th>
                                            <th>وضعیت انتشار</th>
                                            <th>تعداد بازدید</th>
                                            <th>تعداد نظر</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($notes as $note)
                                        <tr>
                                            <td>{{$note->id}}</td>
                                            <td>{{$note->title}}</td>
                                            <td>
                                                @if($note->confirm)
                                                 <h6 class="alert alert-success">تایید شده</h6>  
                                                 @else
                                                 <h6 class="alert alert-danger">تایید نشده</h6>
                                                @endif
                                                
                                            
                                            </td>
                                            <td>
                                            @if($note->publish)
                                                <h6 class="alert alert-success">منتشر شده</h6>  
                                                @else
                                                <h6 class="alert alert-danger">منتشر نشده</h6>
                                            @endif</td>
                                            <td>{{$note->viewCount}}</td>
                                            <td>{{$note->commentCount}}</td>
                                            <td>
                                                
                                                
                                                    
                                                
                                                    @can('confirm')
                                                        
                                                    
                                               
                                                @if ($note->confirm=='0')
                                                    
                                                
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.notes.confirm',$note->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-success text-nowrap" type="submit">تایید یادداشت</button>
                                                </form><hr>
                                                @else
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.notes.unconfirm',$note->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-warning text-nowrap" type="submit">عدم تایید یادداشت</button>
                                                </form><hr>                                               
                                                @endif
                                                @endcan

                                                @can('chief')
                                                    
                                                
                                                @if ($note->publish=='0')
                                                    
                                                
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.notes.publish',$note->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-success text-nowrap" type="submit">انتشار یادداشت</button>
                                                </form><hr>
                                                @else
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.notes.unpublish',$note->id)}}" method="POST">
                                                    @csrf
                                                    @method('put')

                                                <button class="btn btn-warning text-nowrap" type="submit">عدم انتشار یادداشت</button>
                                                </form><hr>                                               
                                                @endif
                                                @endcan


                                                
                                                    
                                                
                                                    
                                                

                                                <a href="{{ route(auth()->user()->role->title.'.notes.shownote',$note->id) }}" class="btn btn-primary">مشاهده</a>
                                                <hr>
                                                @if(!$note->confirm)
                                                <a href="{{ route(auth()->user()->role->title.'.notes.edit',$note->id) }}" class="btn btn-warning">ویرایش</a>
                                                <hr>
                                                @can('editconfirmed')
                                                @if($note->confirm)
                                                <a href="{{ route(auth()->user()->role->title.'.notes.edit',$note->id) }}" class="btn btn-warning">ویرایش</a>
                                                <hr>
                                                @endif
                                                @endcan
                                                @endif

                                                @can('manage')
                                                    
                                                
                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.notes.delete',$note->id)}}" method="POST">
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
                                {{$notes->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
