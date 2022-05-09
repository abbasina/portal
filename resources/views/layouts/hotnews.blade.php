<section class="more-shadow-hover card-body-padding-20 mt-sm-19">
    @foreach ($hotnews as $article)
    <div class="card mb-20">
      <a href="/{!! $article->id !!}/newsdetails">
        <div class="row g-0">
          <div class="col-md-4">
            <img
              src="{{ "/pngarchive/".$article->imageUrl }}"
              class="card-img-right"
              alt="Image"
              loading="lazy"
            />
          </div>
          <div class="col-md-8">
            <div class="card-body pt-sm-none">
              <h5 class="card-title my-3 fw-bold fs-14">
                {{ $article->title }}
              </h5>
              <p class="card-text text-muted">
                {{ $article->description }}
              </p>
              <p class="card-text mt-4 fs-sm-12">
                <button class="btn btn-light text-muted border-end px-2">
                  {{ $article->comisionname }}
                </button>
                <span class="text-muted">
                {{ $article->updated_at }}
              </span>
                
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
</section>