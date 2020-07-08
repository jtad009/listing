<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $rolePrevileadge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Role Previleadges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Previleadges'), ['controller' => 'Previleadges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Previleadge'), ['controller' => 'Previleadges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rolePrevileadges form large-9 medium-8 columns content">
    <?= $this->Form->create($rolePrevileadge) ?>
    <fieldset>
        <legend><?= __('Add Role Previleadge') ?></legend>
        <?php
            echo $this->Form->control('previleadge_id', ['options' => $previleadges]);
            echo $this->Form->control('role_id', ['options' => $roles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
