<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdReview[]|\Cake\Collection\CollectionInterface $adReviews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ad Review'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adReviews index large-9 medium-8 columns content">
    <h3><?= __('Ad Reviews') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adReviews as $adReview): ?>
            <tr>
                <td><?= $this->Number->format($adReview->id) ?></td>
                <td><?= h($adReview->date) ?></td>
                <td><?= h($adReview->fio) ?></td>
                <td><?= h($adReview->email) ?></td>
                <td><?= h($adReview->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adReview->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adReview->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adReview->id)]) ?>
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
