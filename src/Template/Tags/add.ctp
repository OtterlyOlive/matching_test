<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Icons'), ['controller' => 'Icons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Icon'), ['controller' => 'Icons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tag Options'), ['controller' => 'TagOptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag Option'), ['controller' => 'TagOptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tags form large-9 medium-8 columns content">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Add Tag') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('articles._ids', ['options' => $articles]);
            echo $this->Form->control('icons._ids', ['options' => $icons]);
            echo $this->Form->control('tag_options._ids', ['options' => $tagOptions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
