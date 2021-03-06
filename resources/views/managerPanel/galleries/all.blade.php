@extends('managerpanel.master')
@section('styles')
<link rel="stylesheet" href="/panel/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('pageTitle')
مدیریت آلبوم
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">مدیریت آلبوم    </li>
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
                        <div class="card-body ">
                            

                            <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data"  class="form-inline">
                                <p><small>توجه : سایز فایلهای آپلودی نباید بیشتر از 8 مگابایت باشد.</small>
                                    <a class="btn btn-success d-inline" href="{{ route(auth()->user()->role->title.'.albums') }}">بازگشت</a>
                                </p>
                                @include('layouts.errors')
                                <div class="form-group d-inline">
                                    <label class="d-inline" for="">تصویر</label>
                                    <input class="d-inline" type="file" name="image[]"  accept="image/png, image/jpeg, image/jpg, image/gif"  class="form-control" multiple/>
                                    <input class="d-inline"  type="text" name="title" placeholder="توضیح عکس(اختیاری)" class="form-control"/>
                                    <select class="d-inline"  name="status" class="form-control">
                                        <option value="1">انتشار</option>
                                        <option value="0">ذخیر موقت</option>
                                    </select>
                                    <input type="hidden" name="album_id" value="{{ $album->id }}">
    
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-success mb-3" style="margin-bottom: 0px;"> آپلود تصویر</button>
                                </div>
                            </form>
                            

                            <div class="ln_solid"></div>

                        @if(empty($images->count()))
                            <p>تصویری یافت نشد</p>
                        @else
                        <div class="table-responsive">
                            <div class="box">
                                <div class="box-body">

                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                
                                <thead>
                                    <tr>
                                        <th>شناسه</th>
                                        <th>تصویر</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ ایجاد</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($images as $image)
                                    <tr>
                                        <td>{{ (($images->currentPage() - 1 ) * $images->perPage() ) + $loop->iteration }}</td>
                                        <td><img class="img-responsive thumbnail_img" src="{{  asset($image->thumbnail) }}" /></td>
                                        <td>
                                            @if($image->status == 1)
                                                <span class="enable">فعال</span>
                                            @else
                                                <span class="disable">غیرفعال</span>
                                            @endif
                                        </td>
                                        <td>{{ $image->updated_at }}</td>
                                        <td>
                                            <form class=" d-inline" action="{{ route('gallery.update', $image->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                
                                                <input type="hidden" name="id" value="{{ $image->id }}" />
                                                <button type="submit" class="btn btn-success">انتخاب شاخص</button>
                                            </form>
                                            <form class=" d-inline" action="{{ route('gallery.destroy', $image->id) }}" method="post"
                                                onsubmit="return confirm('آیا از حذف این تصویر مطمئن هستید?');">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                {{ csrf_field() }}
                                                <button type="submit" name="Delete" class="btn btn-danger">حذف</button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if($images->total() != 0)
                                <div>نمایش
                                    {{ ($images->currentpage()-1) * $images->perpage()+1}} تا
                                    {{(($images->currentpage()-1) * $images->perpage())+$images->count()}} از
                                    {{$images->total()}} رکوردها
                                </div>
                                {{ $images->links() }}
                            @else
                                رکوردی یافت نشد
                            @endif
                        </div>
                    @endif
                            </div></div>
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