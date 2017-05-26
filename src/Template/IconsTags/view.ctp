<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Icons Tag'), ['action' => 'edit', $iconsTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Icons Tag'), ['action' => 'delete', $iconsTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iconsTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Icons Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Icons Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Icons'), ['controller' => 'Icons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Icon'), ['controller' => 'Icons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="iconsTags view large-9 medium-8 columns content">
    <h3><?= h($iconsTag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($iconsTag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $iconsTag->has('tag') ? $this->Html->link($iconsTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $iconsTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= $iconsTag->has('icon') ? $this->Html->link($iconsTag->icon->name, ['controller' => 'Icons', 'action' => 'view', $iconsTag->icon->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($iconsTag->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($iconsTag->modified) ?></td>
        </tr>
    </table>
</div>
