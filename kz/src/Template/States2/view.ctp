<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\States2 $states2
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit States2'), ['action' => 'edit', $states2->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete States2'), ['action' => 'delete', $states2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $states2->id)]) ?> </li>
        <li><?= $this->Html->link(__('List States2'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New States2'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="states2 view large-9 medium-8 columns content">
    <h3><?= h($states2->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name Ru') ?></th>
            <td><?= h($states2->name_ru) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Kz') ?></th>
            <td><?= h($states2->name_kz) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($states2->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon Link') ?></th>
            <td><?= h($states2->icon_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($states2->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($states2->position) ?></td>
        </tr>
    </table>
</div>
