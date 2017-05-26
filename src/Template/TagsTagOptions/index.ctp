<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tags Tag Option'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tag Options'), ['controller' => 'TagOptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag Option'), ['controller' => 'TagOptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tagsTagOptions index large-9 medium-8 columns content">
    <h3><?= __('Tags Tag Options') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_option_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tagsTagOptions as $tagsTagOption): ?>
            <tr>
                <td><?= h($tagsTagOption->id) ?></td>
                <td><?= $tagsTagOption->has('tag') ? $this->Html->link($tagsTagOption->tag->name, ['controller' => 'Tags', 'action' => 'view', $tagsTagOption->tag->id]) : '' ?></td>
                <td><?= $tagsTagOption->has('tag_option') ? $this->Html->link($tagsTagOption->tag_option->name, ['controller' => 'TagOptions', 'action' => 'view', $tagsTagOption->tag_option->id]) : '' ?></td>
                <td><?= h($tagsTagOption->created) ?></td>
                <td><?= h($tagsTagOption->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tagsTagOption->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tagsTagOption->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tagsTagOption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagsTagOption->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
