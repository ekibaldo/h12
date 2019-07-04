<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serv $serv
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Serv'), ['action' => 'edit', $serv->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Serv'), ['action' => 'delete', $serv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serv->id)]) ?> </li>
        <li><?= $this->Html->link(__('Список услуг'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Добавить услугу'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Список отделений'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Добавить отделение'), ['controller' => 'States', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="servs view large-9 medium-8 columns content">
    <h3><?= h($serv->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($serv->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($serv->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $serv->has('state') ? $this->Html->link($serv->state->name, ['controller' => 'States', 'action' => 'view', $serv->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($serv->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($serv->price) ?></td>
        </tr>
    </table>
</div>
