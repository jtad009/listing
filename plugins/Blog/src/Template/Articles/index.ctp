<?php

/**
 * @var \App\View\AppView $this
 */
$end = count($articles) + 1;
if (count($articles) > 5) {
  $end = intval(count($articles) * 0.7);
}



?>


<div class="row two">
  <div class="col-md-10 mx-auto mt-4">
    <h2 class="title mt-3 blogTitle">Popular</h2>
  </div>
  <div class="col-md-10 mx-auto mt-3">
    <div class="row blog ">
      <?php foreach ($articles as $article) : ?>
        <?= $this->element('post-card-1', ['slug' => $article->slug, 'title' => $article->extractExcerpt, 'image' => $article->cover_image]) ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-10 mx-auto mt-3 mb-3">
    <div class="row blog2">
      <div class="col-md-11 mx-auto">
        <div class="row">
          <?php foreach ($articles as $article) : ?>
            <?= $this->element('post-card-2', ['slug' => $article->slug, 'title' => $article->extractExcerpt, 'image' => $article->cover_image, 'readTime' => $article->readTime]) ?>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-md-11 mx-auto">
        <div class="row">
          <div class="col-md-12 col-lg-4  mb-2">
            <div class="subscribe-section pt-4 h-100">
              <!-- desktop version -->
              <div class="my-auto d-none d-lg-block center-vertical">
                <h1 class="title text-white blogTitle">Subscribe<br />
                  To Our Blog</h1>
                <h4 class="subtitle blogSubtitle text-white mt-3">
                  Stay up to date on all investment news.

                </h4>
                <br />
                <input class="form-control mt-3 mb-3" placeholder="Enter your email" style="font-size: 100%; color:var(--primary-color)" id="subscribe" name="subscribe" />
                <a class="btn btn-primary-outline-invert mx-auto d-block mt-4 w-50 subscribe">Subscribe</a>
                <div class="ml-3 spinner-grow colorBlue d-none ml-5" role="status">
                  <span class="sr-only">Loading...</span>
                </div>


              </div>
              <!-- end desktop -->
              <!-- mobile view -->
              <div class="my-auto d-block d-lg-none p-4 center-vertical">
                <h1 class="title text-white ">Subscribe<br />
                  To Our Blog</h1>
                <h4 class="subtitle text-white">
                  Stay up to date on all investment news.

                </h4>
                <br />
                <input class="form-control mt-3 mb-3" placeholder="Enter your email" style="font-size: 100%; color:var(--primary-color)" id="subscribe" name="subscribe" />
                <a class="btn btn-primary-outline-invert mx-auto d-block mt-4 w-50 subscribe">Subscribe</a>
                <div class="ml-3 spinner-grow colorBlue d-none ml-5" role="status">
                  <span class="sr-only">Loading...</span>
                </div>


              </div>
              <!-- end mobile view -->
            </div>

          </div>
          <?= $this->element('big-post-card', ['title' => $article->extractExcerpt, 'slug' => $article->slug, 'image' => 'blog/big-blog.svg', 'readTime' => $article->readTime]) ?>
        </div>
      </div>

    </div>
    <div class="row mb-3">
      <div class="col-md-11 mx-auto">
        <div class="row">
          <?= $this->element('big-post-card', ['title' => $article->extractExcerpt, 'slug' => $article->slug, 'image' => 'blog/big-blog.svg', 'readTime' => $article->readTime]) ?>
          <?= $this->element('big-post-single', ['title' => $article->extractExcerpt, 'slug' => $article->slug, 'image' => 'blog/big-blog.svg', 'readTime' => $article->readTime]) ?>

        </div>
      </div>
    </div>
  </div>
</div>