<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articlesIcon->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articlesIcon->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articles Icons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Icons'), ['controller' => 'Icons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Icon'), ['controller' => 'Icons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articlesIcons form large-9 medium-8 columns content">
    <?= $this->Form->create($articlesIcon) ?>
    <fieldset>
        <legend><?= __('Edit Articles Icon') ?></legend>
        <?php
            echo $this->Form->control('article_id', ['options' => $articles]);
            echo $this->Form->control('icon_id', ['options' => $icons]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
