<div
class="modal modal-center fade"
id="setcommentModal"
tabindex="-1"
aria-labelledby="setcommentModalLabel"
aria-hidden="true"
>
<div class="modal-dialog modal-main">
  <div class="modal-content border-radius-12">
    <div class="modal-header">
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close"
      ></button>
    </div>
    <div class="modal-body">
      <div class="text-center">

        <h5 class="fw-bold fs-18 my-3">ثبت نظر</h5>

      </div>
      @if(auth()->check())
      <form action="/comment" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="parent_id" value="0">
        <input type="hidden" name="article_id" value="{{ $article->id }}">
        <div class="mb-3">
          <textarea
            class="form-control form-control-lg py-3"
            name="comment"
            placeholder="نظر خود را اینجا وارد کنید."
          /></textarea><hr>


        <button
          type="submit"
          class="btn btn-success d-inline"
          data-bs-dismiss="modal"
          
        >
          ارسال نظر
        </button>
        <button
        type="button"
        class="btn btn-danger d-inline"
        data-bs-dismiss="modal"
        aria-label="Close"
      >انصراف</button>
        </div>
      </form>
      @else
      <div class="card-body comment-body">
        <div class="comment">
    <div class="alert alert-danger">برای ارسال نظر باید ابتدا 
      <a href="{{ route('showlogin') }}">
         وارد
    </a> سایت شوید</div>
        </div>
    </div>
      @endif
    </div>
  </div>
</div>
</div>