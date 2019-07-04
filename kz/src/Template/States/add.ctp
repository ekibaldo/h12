<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\State $state
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Servs'), ['controller' => 'Servs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Serv'), ['controller' => 'Servs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="states form large-9 medium-8 columns content">
    <?= $this->Form->create($state) ?>
    <fieldset>
        <legend><?= __('Добавить отделение') ?></legend>
        <?php
            echo $this->Form->control('name',['label'=>'Заголовок RU']);
            echo $this->Ck->input('text',['label'=>'Текст RU']);
            echo "<br><hr>";
            echo $this->Form->control('name_kz', ['label'=>'Заголовок KZ']);
            echo $this->Ck->input('text_kz', ['label'=>'Текст KZ']);
            echo "<br>";
            echo $this->Form->control('img',['label'=>'Путь к иконке']);
            echo "<br>";
            echo $this->Form->control('block',['label'=>'Блок','type'=>'select','options'=>['Первый блок','Бюджетные','Хозрасчётные']]);
            echo "<br>";
            echo $this->Form->control('position', ['label'=>'Позиция','value'=>1]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
