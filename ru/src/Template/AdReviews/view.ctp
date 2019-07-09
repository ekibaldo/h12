<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdReview $adReview
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad Review'), ['action' => 'edit', $adReview->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad Review'), ['action' => 'delete', $adReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adReview->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ad Reviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad Review'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adReviews view large-9 medium-8 columns content">
    <h3><?= h($adReview->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fio') ?></th>
            <td><?= h($adReview->fio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($adReview->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adReview->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($adReview->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $adReview->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Phone') ?></h4>
        <?= $this->Text->autoParagraph(h($adReview->phone)); ?>
    </div>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($adReview->message)); ?>
    </div>
</div>
