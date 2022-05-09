@extends('layouts.master')

@section('pageTitle')
     مدیریت ویدئوها
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
                    <a href="#">ویرایش ویدوهای صفحه اصلی </a>
                </li>

            </ul>
        </div>
        <section class="mb-3">
            <div class="row g-3">
                @include('managerpanel.dashboard')
                <div class="col-12 col-lg-9">
                    <a href="{!! url()->previous(); !!}  ">
                        <button class="btn btn-green mb-3">بازگشت</button>
                    </a>
                    <div class="card">
                        <div class="card-body">

                            @include('layouts.errors')

                            <form action="{{ route('manager.videos.update') }}" method="POST" class="w-lg-50 mb-4">
                                @csrf
                                @method('put')

                                
                                <div class="mb-3">

                                        

                                        @foreach ($videos as $video)
                                            
                                        <label class="mb-3">عنوان ویدئو</label>
                                        <div class="mb-3 bg-white rounded-12 border form-group">
                                        <div class="input-group input-group-sm">
                                            
                                            <input type="text" name="title-{!! $video->id !!}" class="form-control border-0 py-3"
                                                value="{{ $video->title }}">
    
                                        </div>
                                    </div>
                                        <label class="mb-3">لینک ویدئو</label>
                                        <div class="mb-3 bg-white rounded-12 border form-group">
                                        <div class="input-group input-group-sm">
                                            
                                            <input type="text" name="url-{!! $video->id !!}" class="form-control border-0 py-3"
                                                value="{{ $video->url }}">
    
                                        </div>
                                    </div>



                                
                                        @endforeach

                                    </div>
                                <input type="submit" class="w-50 btn btn-lg btn-green py-3" value="بروزرسانی ویدئوها">
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
