<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider2 $adSlider2
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad Slider2'), ['action' => 'edit', $adSlider2->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad Slider2'), ['action' => 'delete', $adSlider2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adSlider2->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ad Slider2'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad Slider2'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adSlider2 view large-9 medium-8 columns content">
    <h3><?= h($adSlider2->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($adSlider2->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adSlider2->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($adSlider2->position) ?></td>
        </tr>
    </table>
</div>
