@extends('managerpanel.master')
@section('pageTitle')
پروفایل کاربر
@endsection
@section('location')
<section class="content-header">

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i>خانه</a></li>
      <li class="active">پروفایل</li>
    </ol>
  </section>@endsection

@section('content')
<main class="container my-5">

    <section class="mb-3">
        <div class="row g-3">
        @include('managerpanel.dashboard')
            <div class="col-12 col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold mt-5 fs-16">اطلاعات کاربری</h5>
  
                        <table class="table table-striped with-padding"> 
                            <tbody>

                                <tr>
                                    <td>نام و نام خانوادگی</td>
                                    <td class="text-end">{{ auth()->user()->fullname }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>شماره تلفن همراه</td>
                                    <td class="text-end">{{ auth()->user()->phone }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>نوع کاربری</td>
                                    <td class="text-end">{{ auth()->user()->role()->first()->label }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  </main>
@endsection