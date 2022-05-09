<section class="mb-3">
  
    <div class="card">
      <div id="add-comment">
        <h5 class="title">
          <span class="logo-svg"></span>
          نظرات کاربران
          <small class="ms-2 text-muted fw-normal fs-6 d-block d-lg-inline-block"
            >شما هم می توانید در مورد این مطلب نظر بدهید</small
          >
        </h5>
    </div>
    <hr />
        <!-- Comments Form -->
@if(auth()->check())
<div class="card-body comment-body">
    <div class="comment">
      @include('layouts.errors')
    <span>متن نظر شما</span>
    
    <form role="form" action="/comment" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="parent_id" value="0">
        <input type="hidden" name="article_id" value="{{ $article->id }}">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        
        <div class="form-group">
            <textarea name="comment" class="form-control">
            </textarea>
        </div><hr>
        <div class="form-group d-flex flex-row-reverse">
        <button type="submit" class="btn btn-outline-green align-bottom py-3">
            ارسال نظر
        </button>
        </div>
        
       
    </form>
    </div>
</div>
@else
<div class="card-body comment-body">
    <div class="comment">
<div class="alert alert-danger">
    برای ارسال نظر باید ابتدا       
    <a href="{{ route('showlogin') }}">
    وارد
    </a>
 سایت شوید
</div>
    </div>
</div>
@endif
        {{-- comment --}}
        <div class="card-body comment-body">
          
    @foreach ($comments as $comment)
        
    
    <div class="comment">
    
          <div class="message">
            <div class="d-flex">
              <span class="sender"
                ><span class="user-svg"></span>{{ $comment->user->fullname }}
            </span>
              <span class="px-0 px-lg-3" style="padding-top: 0.5rem">
                <span class="border-end mx-3"></span>
              </span>
              <p class="date">{{ $comment->updated_at }}</p>
            </div>
            <p class="mt-2 lh-lg">
              {!! $comment->comment !!}
            </p>
          </div>
          

          <div class="d-flex flex-row-reverse">
          <button class="btn btn-green mb-2" data-bs-toggle="modal" data-bs-target="#setcommentModal" data-parent="{{ $comment->id }}">
            پاسخ
          </button>
          </div>
          {{-- reply --}}
          @if(count($comment->comments))
          @foreach ($comment->comments as $reply)
              
          
          <div class="card reply border">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="fw-bold">{{ $reply->user->fullname }}</p>
                <span>{{ $reply->updated_at }}</span>
              </div>
              <p class="lh-lg">
                {!! $reply->comment !!}
              </p>
            </div>
          </div>
        

          @endforeach
        
     
        
          
          @endif
          {{-- endreply --}}
        </div>
        
        
        
{{-- endcomment --}}
@endforeach
</div>
    </div>
  </section>
  @include('layouts.setcomment')