<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider3[]|\Cake\Collection\CollectionInterface $adSlider3
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ad Slider3'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adSlider3 index large-9 medium-8 columns content">
    <h3><?= __('Ad Slider3') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
         
                <th scope="col"><?= $this->Paginator->sort('изображение') ?></th>
                <th scope="col"><?= $this->Paginator->sort('позиция') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adSlider3 as $adSlider3): ?>
            <tr>
            
                <td><img width=="150px" src="<?= h($adSlider3->img) ?>"></td>
                <td><?= $this->Number->format($adSlider3->position) ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adSlider3->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adSlider3->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adSlider3->id)]) ?>
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
