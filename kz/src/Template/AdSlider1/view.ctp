<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider1 $adSlider1
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ad Slider1'), ['action' => 'edit', $adSlider1->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ad Slider1'), ['action' => 'delete', $adSlider1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adSlider1->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ad Slider1'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ad Slider1'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adSlider1 view large-9 medium-8 columns content">
    <h3><?= h($adSlider1->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($adSlider1->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adSlider1->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($adSlider1->position) ?></td>
        </tr>
    </table>
</div>
