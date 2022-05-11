@extends('managerpanel.master')
@section('styles')
<link rel="stylesheet" href="/panel/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('pageTitle')
ویرایش نام کلانشهر
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="{{ auth()->user()->role->title.'panel' }}"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active"> ویرایش نام کلانشهر</li>
    </ol>
  </section>
@endsection
@section('content')
    <main class="container">
       
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')

                <div class="col-12 col-lg-11">

                    
                        <div class="col-md-6">
                            
                                
                            <a href="{{route(auth()->user()->role->title.'.capitals')}}">
                                <button class="btn btn-success btn-sm">بازگشت به لیست کلانشهرها</button>
                            </a><br><br>
                        
                        
                            
                            <div class="box box-info">
                            <div class="box box-header with-border">
                                <h3 class="box-title">ورودی ها</h3>
                            </div>
                            <div class="box-body">
                            @include('layouts.errors')

                            <form action="{{ route(auth()->user()->role->title.'.capitals.update',$capital->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('put')


                                <div class="input-group">
                                    <span class="input-group-addon">نام کلانشهر </span>
                                    <input name="title" type="text" class="form-control"
                                    value="{{ $capital->name }}">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon"> شناسه استان </span>
                                    <input name="Ostan" type="number" class="form-control"
                                    value="{{ $capital->Ostan }}">
                                    
                                </div><br>
                                <div class="input-group">
                                    <label for="exampleInputFile">تصویر کلانشهر</label>
                                    <input name="imageUrl" type="file" id="exampleInputFile">
                  
                                    <p class="help-block">نمایش در صفحه اصلی</p>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"> جمعیت کلانشهر  </span>
                                    <input name="city_people_amount" type="text" class="form-control"
                                    value="{{ $capital->city_people_amount }}">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">  مناطق دیدنی  </span>
<textarea rows="4" name="city_places" type="text" class="form-control">
{{ $capital->city_places }}
</textarea>
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">  آدرس   </span>
                                    <input name="city_address" type="text" class="form-control"
                                    value="{{ $capital->city_address }}">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">  تلفن   </span>
                                    <input name="city_tel" type="text" class="form-control"
                                    value="{{ $capital->city_tel }}">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">  وبسایت   </span>
                                    <input name="city_website" type="text" class="form-control"
                                    value="{{ $capital->city_website }}">
                                    
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">  آدرس اینترنتی وبسایت   </span>
                                    <input name="city_website_url" type="text" class="form-control text-left"
                                    placeholder="http:\\www.sample.com" value="{{ $capital->city_website_url }}">
                                    
                                </div><br>
                                <input type="hidden" name="capital_id" value="{{ $capital->id }}">
                                  <div class="box-footer">
                                <button class="btn btn-success pull-right">بروزرسانی کلانشهر</button>
                                  </div>
                            </form>
                            </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <br><br>
                            <div class="box">
                                <div class="box-body">
                                    <div class="box-header">
                                        <h3>راهنمای شناسه استان ها</h3>
                                    </div>
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>استان</th>
                                            <th>شناسه استان </th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>آذربایجان شرقی</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>آذربایجان غربی</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>اردبیل</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>اصفهان</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>البرز</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>ایلام</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>بوشهر</td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <td>تهران</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>چهارمحال و بختیاری</td>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <td>خراسان جنوبی</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>خراسان رضوی</td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>خراسان شمالی</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>خوزستان</td>
                                            <td>13</td>
                                        </tr>
                                        <tr>
                                            <td>زنجان</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>سمنان</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>سیستان و بلوچستان</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <td>فارس</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>قزوین</td>
                                            <td>18</td>
                                        </tr>
                                        <tr>
                                            <td>قم</td>
                                            <td>19</td>
                                        </tr>
                                        <tr>
                                            <td>کردستان</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>کرمان</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>کرمانشاه</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td>کهگیلویه و بویر احمد</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td>گلستان</td>
                                            <td>24</td>
                                        </tr>
                                        <tr>
                                            <td>گیلان</td>
                                            <td>25</td>
                                        </tr>
                                        <tr>
                                            <td>لرستان</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>مازندران</td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td>مرکزی</td>
                                            <td>28</td>
                                        </tr>
                                        <tr>
                                            <td>هرمزگان</td>
                                            <td>29</td>
                                        </tr>
                                        <tr>
                                            <td>همدان</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>یزد</td>
                                            <td>31</td>
                                        </tr>
                                        
                                    </tbody>
                                </table></div></div>
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
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true,

        'language': {
            searchPlaceholder: "فیلترسازی",
            search: ' <i class="fa fa-search"></i> ',
            infoEmpty: "رکوردی در دسترس نیست",
            zeroRecords: "رکوردی یافت نشد",
            "info":"نمایش _START_ تا _END_ از _TOTAL_ رکورد",
            "lengthMenu":"نمایش _MENU_ رکورد",
            paginate: {
                 "first": "ابتدا",
                 "previous": "قبلی",
                 "next": "بعدی",
                 "last": "انتها",
            }


      },
     
      })
    })
  </script>
@endsection