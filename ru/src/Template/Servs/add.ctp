<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serv $serv
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Список услуг'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Список отделений'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Добавить отделение'), ['controller' => 'States', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servs form large-9 medium-8 columns content">
    <?= $this->Form->create($serv) ?>
    <fieldset>
        <legend><?= __('Add Serv') ?></legend>
        <?php 
            $servs = file("../../globals/servs.txt");
            foreach ($servs as $serv) {
               $serv_arr[$serv] = $serv;
            }


            echo $this->Form->control('name', ['label' => 'Название']);           
            echo $this->Form->control('type', ['type'=>'select', 'options'=>[$serv_arr], 'label' => 'Тип']);
            echo $this->Form->control('price', ['label'=>'Цена']);
            echo $this->Form->control('state_id', ['options' => $states, 'label'=>'Отделение']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
