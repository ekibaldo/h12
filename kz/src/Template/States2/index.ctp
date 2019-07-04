<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\States2[]|\Cake\Collection\CollectionInterface $states2
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Добавить платные услуги'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="states2 index large-9 medium-8 columns content">
    <h3><?= __('Платные услуги') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Название услуги(ru)') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Название услуги(kz)') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ссылка на страницу') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ссылка на иконку') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Позиция') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($states2 as $states2): ?>
            <tr>
                <td><?= $this->Number->format($states2->id) ?></td>
                <td><?= h($states2->name_ru) ?></td>
                <td><?= h($states2->name_kz) ?></td>
                <td><?= h($states2->link) ?></td>
                <td><?= h($states2->icon_link) ?></td>
                <td><?= $this->Number->format($states2->position) ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $states2->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $states2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $states2->id)]) ?>
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
