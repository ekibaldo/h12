<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdNews[]|\Cake\Collection\CollectionInterface $adNews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Добавить новость'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adNews index large-9 medium-8 columns content">
    <h3><?= __('Ad News') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('дата') ?></th>
                <th scope="col"><?= $this->Paginator->sort('заголовок (ru)') ?></th>
                <th scope="col"><?= $this->Paginator->sort('заголовок (kz)') ?></th>
                <th scope="col"><?= $this->Paginator->sort('изображение') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adNews as $adNews): ?>
            <tr>
                <td><?= $this->Number->format($adNews->id) ?></td>
                <td><?= h($adNews->date) ?></td>
                <td><?= h($adNews->title_ru) ?></td>
                <td><?= h($adNews->title_kz) ?></td>
                <td><img width="150px" src="<?= h($adNews->img) ?>"></td>
                <td class="actions">

                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adNews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adNews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adNews->id)]) ?>
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
