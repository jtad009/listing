<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <div class="col-sm-10 mx-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><?= $this->Html->link(__('Users'), ['action' => 'index']) ?></li>

            </ol>
        </nav>
        <div class="row">
            <?php $id = 0;
            foreach ($users as $user) : $id++;
                echo $this->element('post-card-1', [
                    'fullname' => $user->fullname,
                    'image' => $user->image,
                    'id' => $user->id,
                    'role'=> $user->has('role') ? $user->role->role : 'Normal User',
                ]);
            endforeach;
            ?>
        </div>
        <?= $this->element('pagination') ?>

    </div>
</div>