<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review[]|\Cake\Collection\CollectionInterface $reviews
 */
?>
<?= $this->Html->css('target')?>
<?= $this->Element('review-section') ?>
<?php 
    $this->assign('title', 'Reviews - Doubble by Sterling Bank Plc');
    $this->assign('pageDescription', 'see what people said about us');
?>
<!-- lg section begins -->
<div class="row details d-none d-lg-block">
    <div class="col-md-10 " style="min-height: 70px;">
        &nbsp;
    </div>
    <?php 
    foreach ($reviews as $review):
        echo $this->element('review', ['title'=>$review->title, 'logo'=>$review->logo, 'published'=>$review->publish_date, 'link'=>$review->link]);
     endforeach; 
     ?>
    <div class="col-md-10 " style="min-height: 70px;">
        &nbsp;
    </div>
</div>
<!-- lg section ends -->


<!-- md section begins -->
<div class="row details d-block d-lg-none">
    <div class="col-md-10 " style="min-height: 70px;">
        &nbsp;
    </div>
    <?php 
    foreach ($reviews as $review):
        echo $this->element('review', ['title'=>$review->title, 'logo'=>$review->logo, 'published'=>$review->publish_date, 'link'=>$review->link]);
     endforeach; 
     ?>
    <div class="col-md-10 " style="min-height: 70px;">
        &nbsp;
    </div>
</div>

