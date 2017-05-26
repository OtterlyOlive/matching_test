<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Articles Icon'), ['action' => 'edit', $articlesIcon->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Articles Icon'), ['action' => 'delete', $articlesIcon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesIcon->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles Icons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articles Icon'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Icons'), ['controller' => 'Icons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Icon'), ['controller' => 'Icons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articlesIcons view large-9 medium-8 columns content">
    <h3><?= h($articlesIcon->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($articlesIcon->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Article') ?></th>
            <td><?= $articlesIcon->has('article') ? $this->Html->link($articlesIcon->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesIcon->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= $articlesIcon->has('icon') ? $this->Html->link($articlesIcon->icon->name, ['controller' => 'Icons', 'action' => 'view', $articlesIcon->icon->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($articlesIcon->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($articlesIcon->modified) ?></td>
        </tr>
    </table>
</div>
