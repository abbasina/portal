@extends('managerpanel.master')
@section('styles')
<link rel="stylesheet" href="/panel/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('pageTitle')
پیام های من
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">پیام های من    </li>
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
                                        <div class="col-sm-8"><h2>لیست <b>پیام ها</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{redirect()->back()->getTargetUrl()}}">
                                            <button type="button" class="btn btn-success">بازگشت</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-body">
    
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                                                        <thead>
                                        <tr>
                                            <th>شناسه</th>
                                            <th>متن پیام</th>
                                            <th>ضمیمه پیام</th>
                                            <th>ساعت/تاریخ</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>{{$body->id}}</td>
                                            <td>{{$body->msgbody}}</td>
                                            <td>
                                            @if($body->attachment)
                                                <a class="btn btn-success" href="{{ route(auth()->user()->role->title.'.messages.downloadattach',$body->id) }}">دانلود ضمیمه</a>
                                            @endif
                                                
                                                </td>
                                            <td>{{new verta($body->created_at,'Asia/Tehran','%B %d، %Y')}}</td>
                                           

                                        </tr>    
                                        
    
                                    </tbody>
                                </table>
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