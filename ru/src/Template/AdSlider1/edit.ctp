<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider1 $adSlider1
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adSlider1->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adSlider1->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ad Slider1'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adSlider1 form large-9 medium-8 columns content">
    <?= $this->Form->create($adSlider1, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Ad Slider1') ?></legend>
        <?php
            echo $this->Form->control('position',['label'=>'Позиция']);
            echo $this->Form->control('img',['type'=>'hidden']);
            echo $this->Form->control('file',['type'=>'file','label'=>'Картинка']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
