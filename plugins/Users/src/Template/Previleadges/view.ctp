<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $previleadge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Previleadge'), ['action' => 'edit', $previleadge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Previleadge'), ['action' => 'delete', $previleadge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $previleadge->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Previleadges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Previleadge'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Role Previleadges'), ['controller' => 'RolePrevileadges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role Previleadge'), ['controller' => 'RolePrevileadges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="previleadges view large-9 medium-8 columns content">
    <h3><?= h($previleadge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($previleadge->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Previleadges') ?></th>
            <td><?= h($previleadge->previleadges) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($previleadge->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($previleadge->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Role Previleadges') ?></h4>
        <?php if (!empty($previleadge->role_previleadges)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Previleadge Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($previleadge->role_previleadges as $rolePrevileadges): ?>
            <tr>
                <td><?= h($rolePrevileadges->id) ?></td>
                <td><?= h($rolePrevileadges->previleadge_id) ?></td>
                <td><?= h($rolePrevileadges->created) ?></td>
                <td><?= h($rolePrevileadges->modified) ?></td>
                <td><?= h($rolePrevileadges->role_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RolePrevileadges', 'action' => 'view', $rolePrevileadges->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RolePrevileadges', 'action' => 'edit', $rolePrevileadges->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RolePrevileadges', 'action' => 'delete', $rolePrevileadges->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolePrevileadges->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
