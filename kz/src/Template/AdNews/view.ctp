<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdNews $adNews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad News'), ['action' => 'edit', $adNews->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad News'), ['action' => 'delete', $adNews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adNews->id)]) ?> </li>
        <li><?= $this->Html->link(__('Список новостей'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Добавить новость'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adNews view large-9 medium-8 columns content">
    <h3><?= h($adNews->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title Ru') ?></th>
            <td><?= h($adNews->title_ru) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title Kz') ?></th>
            <td><?= h($adNews->title_kz) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($adNews->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adNews->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($adNews->date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text Ru') ?></h4>
        <?= $this->Text->autoParagraph(h($adNews->text_ru)); ?>
    </div>
    <div class="row">
        <h4><?= __('Text Kz') ?></h4>
        <?= $this->Text->autoParagraph(h($adNews->text_kz)); ?>
    </div>
</div>
