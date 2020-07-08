<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="row">
    <div class="col-md-10 mx-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $this->Html->link(__('Listing'), ['action' => 'index']) ?></li>
                <li class="breadcrumb-item"><?= $this->Html->link(__('New Listing'), ['action' => 'add']) ?></li>
            </ol>
        </nav>
        <div class="card">
            <h3 class="card-header title"><?= __('Categories') ?></h3>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('listing_count') ?></th>

                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>

                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $id = 1;
                    foreach ($categories as $category) : ?>
                        <tr>
                            <td><?= ($id) ?></td>
                            <td><?= h($category->category) ?></td>
                            <td><?= $this->Number->format($category->listing_count) ?></td>

                            <td><?= h($category->created) ?></td>

                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $category->id], ['class' => 'small']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id], ['class' => 'small']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['class' => 'small', 'confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                            </td>
                        </tr>
                    <?php $id++;
                    endforeach; ?>
                </tbody>
            </table>

        </div>
        <?= $this->element('pagination') ?>
    </div>
</div>