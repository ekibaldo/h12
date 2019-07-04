<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Список администраторов'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="admins form large-9 medium-8 columns content">
    <?= $this->Form->create($admin) ?>
    <fieldset>
        <legend><?= __('Добавить администратора') ?></legend>
        <?php
            echo $this->Form->control('name',['label'=>'Имя']);
            echo $this->Form->control('text',['label'=>'Описание']);
            echo $this->Form->control('img',['label'=>'Путь к фото']);
            
            echo $this->Form->control('position',['label'=>'Порядок']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
