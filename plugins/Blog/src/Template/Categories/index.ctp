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

                    <li class="breadcrumb-item"><?= $this->Html->link(__('Categories'), ['action' => 'index']) ?></li>
                    
                </ol>
            </nav>

                <?= $this->Flash->render() ?>
                <?= $this->Html->link('Add Category', ['action' => 'add'], ['class' => 'btn btn-danger mb-3']) ?>
                <div class="categories card">
                    <h3 class="card-header"><?= __('Article Categories') ?></h3>
                    <table class="table table-sm ">
                        <thead>
                            <tr>

                                <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('category') ?></th>
                                <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('article_count') ?></th>
                                <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col" style="font-size: 14px !important;"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions" style="font-size: 14px !important;"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category) : ?>
                                <tr>

                                    <td><?= h($category->category) ?></td>
                                    <td><?= $this->Number->format($category->article_count) ?></td>
                                    <td><?= h($category->created) ?></td>
                                    <td><?= h($category->modified) ?></td>
                                    <td class="actions">
                                        <!-- $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $category->id], ['class' => 'btn-link btn-sm', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'View'])  -->
                                        <?= $this->Html->link(__('<i class="fa fa-edit"></i>'), ['action' => 'edit', $category->id], ['class' => 'btn-link btn-sm', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'Edit']) ?>
                                        <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', $category->id], ['data-toggle' => 'tooltip', 'title' => 'Delete', 'class' => 'btn-link btn-sm text-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
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