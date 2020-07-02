<?php

/**
 * @var \App\View\AppView $this
 */
$this->assign('title', $article->extractExcerpt);

?>
<div class="row mt-3">
    <div class="col-md-10 mx-auto mt-3">
        <div class="row">
            <div class="col-md-6 p-5">
                <h2 class="title blogTitle"><?= ucwords($article->title) ?></h2>
                <span class="primary-color readTime"><?= $article->readTime ?></span>
                <p class="mt-2">
                    <?= $this->Html->link($this->Html->image('social/twitter.svg'), [], ['class' => 'mt-1 mr-2', 'escape' => false]) ?>
                    <?= $this->Html->link($this->Html->image('social/fb.svg'), [], ['class' => 'mt-1 mr-2', 'escape' => false]) ?>
                    <?= $this->Html->link($this->Html->image('social/whatsapp.svg'), [], ['class' => 'mt-1 mr-2', 'escape' => false]) ?>
                    <?= $this->Html->link($this->Html->image('social/msg.svg'), [], ['class' => 'mt-1 mr-2', 'escape' => false]) ?>


                </p>
            </div>
            <div class="col-md-6">
                <?= $this->Html->image('passport/blogs/' . $article->cover_image, ['class' => 'img img-fluid w-100 h-100', 'style' => 'object-fit:fill']) ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-10 details mx-auto primary-color mt-4 blogBody text-justify">
                <?= $article->article ?>
            </div>
        </div>
    </div>

</div>

<div class="row two">
    <div class="col-md-11 mx-auto">
        <div class="col-md-10 mx-auto mt-3">
            <h2 class="title mt-5 blogTitle">Comments</h2>
        </div>
        <div class=" col-md-8 mx-auto p-4">
            <div id="disqus_thread"></div>

            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                    powered by Disqus.</a></noscript>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-11 mx-auto">
        <div class="col-md-10 mx-auto mt-3">
            <h2 class="title blogTitle mt-5 ">Related Articles</h2>
        </div>
        <div class="col-md-10 mx-auto mt-3 mb-3">
            <div class="row blog2">
                <?php

                foreach ($similar  as $article) :
                    echo $this->element('post-card-2', ['showRead'=>false, 'slug' => $article->slug, 'title' => $article->title, 'image' => $article->cover_image, 'readTime' => $article->readTime]);
                endforeach;
                ?>


            </div>

        </div>
    </div>
</div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

    var disqus_config = function() {
        this.page.url = window.location.href; // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = '<?= $article->id ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = '<?= DISCUS_URL ?>';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>