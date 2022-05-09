<div class="card mb-20">
    <h5 class="title">
      <span class="logo-svg"></span>
      پربازدیدها
    </h5>
    <div class="card-body" style="padding-top: 0 !important">
      <ul class="green-list">
          @foreach ($topviews as $topview)
          <li class="fw-bold fs-14">
            <a href="/{!! $topview->id !!}/newsdetails">
              {{ $topview->title }}
            </a>
            <p class="date">{{ $topview->updated_at }}</p>
          </li>
          @endforeach


      </ul>
    </div>
  </div>