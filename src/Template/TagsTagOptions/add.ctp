<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tags Tag Options'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tag Options'), ['controller' => 'TagOptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag Option'), ['controller' => 'TagOptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tagsTagOptions form large-9 medium-8 columns content">
    <?= $this->Form->create($tagsTagOption) ?>
    <fieldset>
        <legend><?= __('Add Tags Tag Option') ?></legend>
        <?php
            echo $this->Form->control('tag_id', ['options' => $tags]);
            echo $this->Form->control('tag_option_id', ['options' => $tagOptions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
