<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container-fluid" >
        <div class="row">
 <div class="col-lg-8 col-md-10 mx-auto">
                 <div class="col-lg-12 mt-3">
                    <?php $this->Html->addCrumb('Dashboard', ['controller'=>'articles','action'=>'index','prefix'=>false,'plugin'=>'Blog']); ?> 
                    <?php $this->Html->addCrumb('Tags ',null); ?>
                   
                    <?=  $this->Html->getCrumbList();?>
                    <?= $this->Flash->render() ?>
                    <?= $this->Html->link('Add Tag', ['action'=>'add'],['class'=>'btn btn-danger mb-3']) ?>
<div class="tags card">
    <h3 class="card-header"><?= __('Tags') ?></h3>
    <table class="table table-sm table-bordered ">
        <thead>
            <tr>
                <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('tag') ?></th>
                <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tags as $tag): ?>
            <tr>
                <td><?= $this->Number->format($tag->id) ?></td>
                <td><?= h($tag->tag) ?></td>
                <td><?= h($tag->created) ?></td>
                <td><?= h($tag->modified) ?></td>
                <td class="actions">
                     <!-- $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $tag->id],['class'=>'btn-link btn-sm','escape'=>false,'data-toggle'=>'tooltip','title'=>'View']) -->
                    <?= $this->Html->link(__('<i class="fa fa-edit"></i>'), ['action' => 'edit', $tag->id],['class'=>'btn-link btn-sm','escape'=>false,'data-toggle'=>'tooltip','title'=>'Edit']) ?>
                    <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', $tag->id], ['data-toggle'=>'tooltip','title'=>'Delete','class'=>'btn-link btn-sm text-danger','escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
</div>
</div>
<div class="col-12">
            <div class="paginator mt-5">
                <p class="text-center small colorBlue" style="font-size: 12px"><?= $this->Paginator->counter(['format' => __('Showing items {{start}} - {{end}} of {{count}} ')]) ?></p>
                <ul class="pagination pagination-sm justify-content-center">

                    <?= $this->Paginator->numbers([
                        'modulus' => 1,
                        'first' => 1,
                        'last' => 1
                    ]) ?>

                    <?= $this->Paginator->next(__('<i class="fa fa-play"></i>'), ['escape' => false,]) ?>

                </ul>

            </div>
        </div>
</div>
</div>

