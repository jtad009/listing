<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $previleadge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Previleadges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Role Previleadges'), ['controller' => 'RolePrevileadges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role Previleadge'), ['controller' => 'RolePrevileadges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="previleadges form large-9 medium-8 columns content">
    <?= $this->Form->create($previleadge) ?>
    <fieldset>
        <legend><?= __('Add Previleadge') ?></legend>
        <?php
            echo $this->Form->control('previleadges');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
