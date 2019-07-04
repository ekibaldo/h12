<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider2 $adSlider2
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ad Slider2'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adSlider2 form large-9 medium-8 columns content">
    <?= $this->Form->create($adSlider2, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Ad Slider2') ?></legend>
        <?php
            echo $this->Form->control('position',['value'=>1,'label'=>'Позиция']);
            echo $this->Form->control('file',['type'=>'file','label'=>'Картинка']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
