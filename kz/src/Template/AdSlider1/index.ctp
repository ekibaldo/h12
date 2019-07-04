<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider1[]|\Cake\Collection\CollectionInterface $adSlider1
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ad Slider1'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adSlider1 index large-9 medium-8 columns content">
    <h3><?= __('Ad Slider1') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
       
                <th scope="col"><?= $this->Paginator->sort('изображение') ?></th>
                <th scope="col"><?= $this->Paginator->sort('позиция') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adSlider1 as $adSlider1): ?>
            <tr>
     
                <td><img width=="150px" src="<?= h($adSlider1->img) ?>"></td>
                <td><?= $this->Number->format($adSlider1->position) ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adSlider1->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adSlider1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adSlider1->id)]) ?>
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
