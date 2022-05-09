@extends('layouts.master')

@section('pageTitle')
نظرات من
@endsection

@section('content')
    <main class="container">
        <h1 class="main-title"> پنل کاربری</h1>
        <div class="brudcrumbs my-3">
            <ul>
                <li>
                    <a href="#">پنل کاربری</a>
                </li>
                <li>
                    <span> / </span>
                </li>
                <li>
                    <a href="#"> نظرات من</a>
                </li>

            </ul>
        </div>
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-8"><h2>لیست <b> نظرات من</b></h2></div>
                                        <div class="col-sm-4">
                                            <a href="{{URL::previous()}}">
                                            <button type="button" class="btn btn-green mb-3">بازگشت</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th>متن نظر من</th>
                                            <th>وضعیت تایید</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mycomments as $comment)
                                        <tr>
                                            <td>{{$comment->comment}}</td>
                                            <td>
                                                @if (!$comment->confirmStatus) 
                                                <h6 class="alert alert-warning">در انتظار تایید</h6>
                                                @else
                                                <h6 class="alert alert-success">تایید شده</h6>
                                                @endif
                                                
                                            </td>

                                        </tr>    
                                        @endforeach
    
                                    </tbody>
                                </table>
                                {{$mycomments->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
