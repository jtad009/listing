<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>

<div class="row">
    <div class="col-md-8 mx-auto">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><?= $this->Html->link(__('Users'), ['action' => 'index']) ?></li>
                <li class="breadcrumb-item"><?= $this->Html->link(__('View'), ['action' => 'View']) ?></li>
            </ol>
        </nav>
<div class="card mb-3">
    <?= $this->Html->image(h($user->image), ['class'=>'card-img-top', 'alt'=>$user->username])?>

    <h3 class="card-header"><?= h($user->fullname) ?></h3>
    <table class="table table-sm table-bordered">
       
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        
        
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
    </table>
</div>
    </div>
</div>

