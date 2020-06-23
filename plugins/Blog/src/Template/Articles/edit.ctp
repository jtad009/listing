<?php

/**
 * @var \App\View\AppView $this
 */

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="col-lg-12 mt-3">
        <br />
        <br />
        <br />
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">

            <li class="breadcrumb-item"><?= $this->Html->link(__('Articles'), ['action' => 'index']) ?></li>
            <li class="breadcrumb-item active"><?= $this->Html->link(__('Edit'), ['action' => 'edit']) ?></li>
          </ol>
        </nav>



        <div class="articles card bg-dark">
          <?= $this->Form->create($article, ['type' => 'file']) ?>
          <fieldset class="card-body">
            <h4 class="card-title text-center text-white"><?= __('Add Article') ?>
              <hr />
            </h4>
            <?php
            echo $this->Form->input('category_id', ['templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'], 'class' => 'form-control']);
            echo $this->Form->input('title', ['templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'], 'class' => 'form-control']);
            echo $this->Form->input('cover_image', ['templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'], 'type' => 'file', 'class' => 'form-control']);
            // echo $this->Form->input('article', [
            //   'class' => 'editor form-control', 'templates' =>
            //   ['inputContainer' => '<div class="form-group form-group-sm bg-white">{{content}}</div>'], 'placeholder' => 'enter message',
            //   'label' => false,
            // ]);
            ?>
            <textarea name="editor" class=" form-control" placeholder="enter message" maxlength="100000" id="editor" rows="5"><?= $article->article ?></textarea>
            <div class="form-group">
              <input type="hidden" name="published" value="0" class="form-control">
              <label for="published" class="d-flex mt-3">
                <input type="checkbox" name="published" value="1" id="published" style="height:50px !important; width:20px;">
                <span class="ml-4" style="line-height:50px">Tick to Published</span>
              </label>
              </div>
            <?php

            echo $this->Form->input('user_id', ['templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'], 'options' => $users, 'class' => 'form-control']);
            echo $this->Form->input('tags._ids', [
              'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
              'options' => $tags,
              'class' => 'form-control', 'style' => 'height:200px !important'
            ]);
            ?>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-block btn-primary']) ?>
          </fieldset>

          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>
<script>
  document.getElementById("published").checked = '<?php echo $article->published != 0 ; ?>';
   CKEDITOR.replace('editor', {
    extraPlugins: 'image2,uploadimage',

    
    // Configure your file manager integration. This example uses CKFinder 3 for PHP.
    // filebrowserBrowseUrl: '<?= BASE_DOMAIN ?>blog/s/ckfinder/ckfinder.html',
    // filebrowserImageBrowseUrl: '<?= BASE_DOMAIN ?>/webroot/img/',
    filebrowserUploadUrl: '<?= BASE_DOMAIN ?>blog/articles/upload/?responseType=json',
    filebrowserImageUploadUrl: '<?= BASE_DOMAIN ?>blog/articles/upload/?responseType=json',

    // Upload dropped or pasted images to the CKFinder connector (note that the response type is set to JSON).
    uploadUrl: '<?= BASE_DOMAIN ?>blog/articles/upload/?responseType=json',

    // Reduce the list of block elements listed in the Format drop-down to the most commonly used.
    format_tags: 'p;h1;h2;h3;pre',
    // Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
    removeDialogTabs: 'image:advanced;link:advanced',

    height: 450,

    // filebrowserUploadMethod: 'form'
  });
</script>