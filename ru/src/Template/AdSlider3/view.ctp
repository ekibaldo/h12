<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider3 $adSlider3
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad Slider3'), ['action' => 'edit', $adSlider3->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad Slider3'), ['action' => 'delete', $adSlider3->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adSlider3->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ad Slider3'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad Slider3'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adSlider3 view large-9 medium-8 columns content">
    <h3><?= h($adSlider3->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($adSlider3->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adSlider3->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($adSlider3->position) ?></td>
        </tr>
    </table>
</div>
