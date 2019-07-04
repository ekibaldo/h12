<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\States2 $states2
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $states2->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $states2->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Показать платные услуги'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="states2 form large-9 medium-8 columns content">
    <?= $this->Form->create($states2) ?>
    <fieldset>
        <legend><?= __('Edit States2') ?></legend>
        <?php

            echo $this->Form->control('name_ru',['label'=>'Название услуги(RU)']);
            echo $this->Form->control('name_kz',['label'=>'Название услуги(KZ)']);
            echo $this->Form->control('link',['label'=>'Ссылка на страницу']);
            echo $this->Form->control('icon_link',['label'=>'Ссылка на иконку']);
            echo $this->Form->control('position',['label'=>'Позиция']);
        
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
