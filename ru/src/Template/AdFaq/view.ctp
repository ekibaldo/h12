<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdFaq $adFaq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad Faq'), ['action' => 'edit', $adFaq->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad Faq'), ['action' => 'delete', $adFaq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adFaq->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ad Faq'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad Faq'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adFaq view large-9 medium-8 columns content">
    <h3><?= h($adFaq->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fio') ?></th>
            <td><?= h($adFaq->fio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adFaq->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Post') ?></th>
            <td><?= h($adFaq->date_post) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $adFaq->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Q') ?></h4>
        <?= $this->Text->autoParagraph(h($adFaq->q)); ?>
    </div>
    <div class="row">
        <h4><?= __('A') ?></h4>
        <?= $this->Text->autoParagraph(h($adFaq->a)); ?>
    </div>
</div>
