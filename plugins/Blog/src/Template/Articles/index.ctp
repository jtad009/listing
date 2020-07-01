<?php

/**
 * @var \App\View\AppView $this
 */
$articleData = $articles->toArray();
$this->assign('title', 'Blog -  Doubble by Sterling Bank Plc');

/**
 * Split array into section as required by design. 
 * this is done in view instead of controller 
 * so it's independent of controller logic
 * @param array $array array to split
 * @param int $parts how many parts you want inside each part
 * @return array
 */
function splitArray($array, $parts){
  $n = $parts;
  $result = [[],[],[]];
  $wordsPerLine = 3;
  $arrayLength = count($array);
  $totalPossibleStep =  ceil( $arrayLength / $wordsPerLine);

  for ( $line = 0; $line < $n; $line++) {
    if($line == $totalPossibleStep){
      break;
    }
    for ($i = 0; $i < $wordsPerLine; $i++) {
      $currentLine = $i + $line * $wordsPerLine;
      if($currentLine == $arrayLength){ //check if we still have items
        break;
      }
      $value = $array[$currentLine];
     
      if (is_null($value)){
      break; 
      } 
      array_push($result[$line], $value);
    }
    
  }
  return $result;
}
$result = splitArray($articleData, 3);

?>


<div class="row two" <?= !empty($result[0]) ?: 'style="height:48`vh"'?>>
  <div class="col-md-10 mx-auto mt-4">
  <?php if(!empty($result[0])) : ?>
    <h2 class="title mt-3 blogTitle">Popular</h2>
    <?php endif; ?>
  </div>
  
  <div class="col-md-10 mx-auto mt-3">
    <div class="row blog ">
      <?php if(empty($result[0])) : ?>
        <h1 class="title mt-3 blogTitle text-center w-100 d-none d-lg-block"> <?= NO_ARTICLE ?></h1>
        <h1 class="title mt-3 blogTitle text-center w-100 d-block d-lg-none"> <?= NO_ARTICLE ?></h1>
      <?php endif; ?>
      <?php foreach ($result[0] as $article) : ?>
        <?= $this->element('post-card-1', ['slug' => $article->slug, 'title' => $article->title, 'image' => $article->cover_image]) ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php if( !empty($result[1]) ) : ?>
<div class="row">
  <div class="col-md-10 mx-auto mt-3 mb-3">
    <div class="row blog2">
      <div class="col-md-11 mx-auto">
        <div class="row">
          <?php foreach ($result[1] as $article) : ?>
            <?= $this->element('post-card-2', ['slug' => $article->slug, 'title' => $article->title, 'image' => $article->cover_image, 'readTime' => $article->readTime]) ?>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
    <?php  if(!empty($result[2]) ): ?>
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
                Get insightful articles on money and investment in your mailbox.

                </h4>
                <br />
                <input class="form-control mt-3 mb-3" placeholder="Enter your email" style="font-size: 100%; color:var(--primary-color)" id="subscribe" name="subscribe" />
                <a class="btn btn-primary-outline-invert mx-auto d-block mt-4 w-50 subscribe">Subscribe</a>
                <div class=" mx-auto text-center">
                  <div class="ml-3 spinner-grow bg-white mt-3 text-center" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </div>


              </div>
              <!-- end desktop -->
              <!-- mobile view -->
              <div class="my-auto d-block d-lg-none p-4 center-vertical">
                <h1 class="title text-white ">Subscribe<br />
                  To Our Blog</h1>
                <h4 class="subtitle text-white">
                  Get insightful articles on money and investment in your mailbox.

                </h4>
                <br />
                <input class="form-control mt-3 mb-3" placeholder="Enter your email" style="font-size: 100%; color:var(--primary-color)" id="subscribe" name="subscribe" />
                <a class="btn btn-primary-outline-invert mx-auto d-block mt-4 w-50 subscribe">Subscribe</a>
                <div class=" mx-auto text-center">
                  <div class="ml-3 spinner-grow bg-white mt-3 text-center" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </div>


              </div>
              <!-- end mobile view -->
            </div>

          </div>
          
          <?php 
          //check that arr for section 3 isnt empty
            if(!empty($result[2][0]) ):
              echo $this->element('big-post-card', ['title' => $result[2][0]->title, 'slug' => $result[2][0]->slug, 'image' => $result[2][0]->cover_image, 'readTime' => $result[2][0]->readTime]); 
            endif; 
          ?>
        </div>
      </div>

    </div>
  
    <div class="row mb-3">
      <div class="col-md-11 mx-auto">
        <div class="row">
        <?php 
        
        //check that array before last isnt null
            if( !empty($result[2][1])):
             echo  $this->element('big-post-card', ['cardSize'=>6,'title' => $result[2][1]->title, 'slug' => $result[2][1]->slug, 'image' => $result[2][1]->cover_image, 'readTime' => $result[2][1]->readTime]);
            endif;
            //check the last array isnt null //blog-post-single
            if( !empty($result[2][2]) ):
              echo $this->element('big-post-card', ['cardSize'=>6,'title' => $result[2][2]->title, 'slug' => $result[2][2]->slug, 'image' => $result[2][2]->cover_image, 'readTime' => $result[2][2]->readTime]) ;
            endif;
        ?>

        </div>
      </div>
    </div>
          <?php endif; ?>
  </div>
</div>
<?php endif; ?>