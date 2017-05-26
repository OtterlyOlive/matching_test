<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Articles Icon'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Icons'), ['controller' => 'Icons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Icon'), ['controller' => 'Icons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articlesIcons index large-9 medium-8 columns content">
    <h3><?= __('Articles Icons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('article_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icon_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articlesIcons as $articlesIcon): ?>
            <tr>
                <td><?= h($articlesIcon->id) ?></td>
                <td><?= $articlesIcon->has('article') ? $this->Html->link($articlesIcon->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesIcon->article->id]) : '' ?></td>
                <td><?= $articlesIcon->has('icon') ? $this->Html->link($articlesIcon->icon->name, ['controller' => 'Icons', 'action' => 'view', $articlesIcon->icon->id]) : '' ?></td>
                <td><?= h($articlesIcon->created) ?></td>
                <td><?= h($articlesIcon->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articlesIcon->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articlesIcon->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articlesIcon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesIcon->id)]) ?>
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
