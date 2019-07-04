<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdSlider3 $adSlider3
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adSlider3->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adSlider3->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ad Slider3'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adSlider3 form large-9 medium-8 columns content">
    <?= $this->Form->create($adSlider3, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Ad Slider3') ?></legend>
        <?php
            echo $this->Form->control('position',['label'=>'Позиция']);
            echo $this->Form->control('link_ru',['label'=>'Ссылка']);
            echo $this->Form->control('text_ru',['label'=>'Текст(RU)']);
            echo $this->Form->control('text_kz',['label'=>'Текст(KZ)']);     
            echo $this->Form->control('img',['type'=>'hidden']);
            echo $this->Form->control('file',['type'=>'file','label'=>'Картинка']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
