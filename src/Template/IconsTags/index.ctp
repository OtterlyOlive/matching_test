<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Icons Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Icons'), ['controller' => 'Icons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Icon'), ['controller' => 'Icons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="iconsTags index large-9 medium-8 columns content">
    <h3><?= __('Icons Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icon_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($iconsTags as $iconsTag): ?>
            <tr>
                <td><?= h($iconsTag->id) ?></td>
                <td><?= $iconsTag->has('tag') ? $this->Html->link($iconsTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $iconsTag->tag->id]) : '' ?></td>
                <td><?= $iconsTag->has('icon') ? $this->Html->link($iconsTag->icon->name, ['controller' => 'Icons', 'action' => 'view', $iconsTag->icon->id]) : '' ?></td>
                <td><?= h($iconsTag->created) ?></td>
                <td><?= h($iconsTag->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $iconsTag->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $iconsTag->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $iconsTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iconsTag->id)]) ?>
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
