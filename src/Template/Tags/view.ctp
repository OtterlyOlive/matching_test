<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Icons'), ['controller' => 'Icons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Icon'), ['controller' => 'Icons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tag Options'), ['controller' => 'TagOptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag Option'), ['controller' => 'TagOptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($tag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tag->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tag->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tag->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Articles') ?></h4>
        <?php if (!empty($tag->articles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->articles as $articles): ?>
            <tr>
                <td><?= h($articles->id) ?></td>
                <td><?= h($articles->title) ?></td>
                <td><?= h($articles->content) ?></td>
                <td><?= h($articles->created) ?></td>
                <td><?= h($articles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Icons') ?></h4>
        <?php if (!empty($tag->icons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Icon') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->icons as $icons): ?>
            <tr>
                <td><?= h($icons->id) ?></td>
                <td><?= h($icons->name) ?></td>
                <td><?= h($icons->icon) ?></td>
                <td><?= h($icons->created) ?></td>
                <td><?= h($icons->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Icons', 'action' => 'view', $icons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Icons', 'action' => 'edit', $icons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Icons', 'action' => 'delete', $icons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $icons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tag Options') ?></h4>
        <?php if (!empty($tag->tag_options)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->tag_options as $tagOptions): ?>
            <tr>
                <td><?= h($tagOptions->id) ?></td>
                <td><?= h($tagOptions->name) ?></td>
                <td><?= h($tagOptions->created) ?></td>
                <td><?= h($tagOptions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TagOptions', 'action' => 'view', $tagOptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TagOptions', 'action' => 'edit', $tagOptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TagOptions', 'action' => 'delete', $tagOptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagOptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
