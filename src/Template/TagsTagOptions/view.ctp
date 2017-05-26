<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tags Tag Option'), ['action' => 'edit', $tagsTagOption->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tags Tag Option'), ['action' => 'delete', $tagsTagOption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagsTagOption->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags Tag Options'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tags Tag Option'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tag Options'), ['controller' => 'TagOptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag Option'), ['controller' => 'TagOptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tagsTagOptions view large-9 medium-8 columns content">
    <h3><?= h($tagsTagOption->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($tagsTagOption->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $tagsTagOption->has('tag') ? $this->Html->link($tagsTagOption->tag->name, ['controller' => 'Tags', 'action' => 'view', $tagsTagOption->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag Option') ?></th>
            <td><?= $tagsTagOption->has('tag_option') ? $this->Html->link($tagsTagOption->tag_option->name, ['controller' => 'TagOptions', 'action' => 'view', $tagsTagOption->tag_option->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tagsTagOption->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tagsTagOption->modified) ?></td>
        </tr>
    </table>
</div>
