@extends('layouts.master')

@section('pageTitle')
    ایجاد پیام جدید
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
                    <a href="#"> ایجاد پیام جدید</a>
                </li>

            </ul>
        </div>
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{{redirect()->back()->getTargetUrl()}}">
                        <button class="btn btn-green">بازگشت</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route('manager.messages.update', $message->id ) }}" method="POST" class="w-lg-50 mb-4" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="mb-3 bg-white rounded-12">
                                    <div class="input-group input-group-sm form-group">
                                        
                                        <textarea class="form-control d-block py-3" type="textarea" name="msgbody" 
                                            placeholder="متن پیام" rows="3">{{ $message->msgbody }}</textarea>


                                    </div>
                                        


                                    
                                </div>
                                <button class="w-100 btn btn-lg btn-green py-3">ویرایش پیام</button>
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
