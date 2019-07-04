<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider2 $adSlider2
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adSlider2->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adSlider2->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ad Slider2'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adSlider2 form large-9 medium-8 columns content">
    <?= $this->Form->create($adSlider2, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Ad Slider2') ?></legend>
        <?php
            echo $this->Form->control('position',['label'=>'Позиция']);
            echo $this->Form->control('img',['type'=>'hidden']);
            echo $this->Form->control('file',['type'=>'file','label'=>'Картинка']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
