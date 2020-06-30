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
                    <li class="breadcrumb-item active"><?= $this->Html->link(__('Add'), ['action' => 'add']) ?></li>
                </ol>
            </nav>

                <?= $this->Flash->render() ?>
                <div class="categories card <?= BG ?>">
                    <?= $this->Form->create($category) ?>
                    <fieldset class="card-body">
                        <h4 class="card-title text-center text-white"><?= __('Add Category') ?>
                            <hr />
                        </h4>
                        <?php
                        echo $this->Form->input('category', ['templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'], 'class' => 'form-control']);

                        ?>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-block btn-primary']) ?>
                    </fieldset>

                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>