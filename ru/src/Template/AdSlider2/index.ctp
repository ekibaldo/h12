<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider2[]|\Cake\Collection\CollectionInterface $adSlider2
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ad Slider2'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adSlider2 index large-9 medium-8 columns content">
    <h3><?= __('Ad Slider2') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               
                <th scope="col"><?= $this->Paginator->sort('изображение') ?></th>
                <th scope="col"><?= $this->Paginator->sort('позиция') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adSlider2 as $adSlider2): ?>
            <tr>
          
                <td><img width=="150px" src="<?= h($adSlider2->img) ?>"></td>
                <td><?= $this->Number->format($adSlider2->position) ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adSlider2->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adSlider2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adSlider2->id)]) ?>
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
