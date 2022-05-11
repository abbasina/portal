@extends('managerpanel.master')
@section('styles')
<link rel="stylesheet" href="/panel/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('pageTitle')
مدیریت سردبیران
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">مدیریت سردبیران</li>
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
                                        <div class="col-sm-8"><h2>لیست <b>کلانشهرها</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{route(auth()->user()->role->title.'.chiefs.create')}}">
                                            <button type="button" class="btn btn-info">افزودن کلانشهر</button>
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
                                            <th>نام کلانشهر</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chiefs as $chief)
                                        <tr>
                                            <td>{{$chief->id}}</td>
                                            <td>{{$chief->name}}</td>
                                            <td>
                                                <a href="{{ route(auth()->user()->role->title.'.chiefs.edit',$chief->id) }}" class="btn btn-primary" title="Add">ویرایش</a>


                                                <form class="d-inline" action="{{route(auth()->user()->role->title.'.chiefs.delete',$chief->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                                </form>
                                              
                                            </td>
                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                                    
                                {{$chiefs->links()}}
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