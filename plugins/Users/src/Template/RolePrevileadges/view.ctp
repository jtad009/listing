<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $rolePrevileadge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role Previleadge'), ['action' => 'edit', $rolePrevileadge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role Previleadge'), ['action' => 'delete', $rolePrevileadge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolePrevileadge->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Role Previleadges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role Previleadge'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Previleadges'), ['controller' => 'Previleadges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Previleadge'), ['controller' => 'Previleadges', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rolePrevileadges view large-9 medium-8 columns content">
    <h3><?= h($rolePrevileadge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($rolePrevileadge->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Previleadge') ?></th>
            <td><?= $rolePrevileadge->has('previleadge') ? $this->Html->link($rolePrevileadge->previleadge->id, ['controller' => 'Previleadges', 'action' => 'view', $rolePrevileadge->previleadge->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $rolePrevileadge->has('role') ? $this->Html->link($rolePrevileadge->role->id, ['controller' => 'Roles', 'action' => 'view', $rolePrevileadge->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rolePrevileadge->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rolePrevileadge->modified) ?></td>
        </tr>
    </table>
</div>
