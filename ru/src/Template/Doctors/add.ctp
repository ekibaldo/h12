<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Список специалистов'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Список отделений'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Добавить отделение'), ['controller' => 'States', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doctors form large-9 medium-8 columns content">
    <?= $this->Form->create($doctor, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Doctor') ?></legend>
        <?php
            echo $this->Form->control('name',['label'=>'Имя']);
            echo $this->Form->control('text',['label'=>'Описание']);
            echo $this->Form->control('file',['type'=>'file','label'=>'Картинка']);
            echo $this->Form->control('state_id', ['options' => $states, 'label'=>'Отделение']);
            echo $this->Form->control('position',['label'=>'Позиция']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

