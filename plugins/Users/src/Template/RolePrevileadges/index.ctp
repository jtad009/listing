<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $rolePrevileadges
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Role Previleadge'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Previleadges'), ['controller' => 'Previleadges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Previleadge'), ['controller' => 'Previleadges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rolePrevileadges index large-9 medium-8 columns content">
    <h3><?= __('Role Previleadges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('previleadge_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rolePrevileadges as $rolePrevileadge): ?>
            <tr>
                <td><?= h($rolePrevileadge->id) ?></td>
                <td><?= $rolePrevileadge->has('previleadge') ? $this->Html->link($rolePrevileadge->previleadge->id, ['controller' => 'Previleadges', 'action' => 'view', $rolePrevileadge->previleadge->id]) : '' ?></td>
                <td><?= h($rolePrevileadge->created) ?></td>
                <td><?= h($rolePrevileadge->modified) ?></td>
                <td><?= $rolePrevileadge->has('role') ? $this->Html->link($rolePrevileadge->role->id, ['controller' => 'Roles', 'action' => 'view', $rolePrevileadge->role->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rolePrevileadge->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolePrevileadge->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolePrevileadge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolePrevileadge->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
