<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $previleadges
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Previleadge'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Role Previleadges'), ['controller' => 'RolePrevileadges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role Previleadge'), ['controller' => 'RolePrevileadges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="previleadges index large-9 medium-8 columns content">
    <h3><?= __('Previleadges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('previleadges') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($previleadges as $previleadge): ?>
            <tr>
                <td><?= h($previleadge->id) ?></td>
                <td><?= h($previleadge->previleadges) ?></td>
                <td><?= h($previleadge->created) ?></td>
                <td><?= h($previleadge->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $previleadge->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $previleadge->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $previleadge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $previleadge->id)]) ?>
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
