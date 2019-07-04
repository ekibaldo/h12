<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdNews $adNews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adNews->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adNews->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Список новостей'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adNews form large-9 medium-8 columns content">
    <?= $this->Form->create($adNews, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Ad News') ?></legend>
        <?php
            echo $this->Form->control('date', ['label'=>'Дата']);
            echo $this->Form->control('title_ru', ['label'=>'Заголовок (RU)']);
            //echo $this->Form->control('text_ru');
            echo $this->Ck->input('text_ru', ['label'=>'Текст (RU)']);
            echo "<br><br>";
            echo $this->Form->control('title_kz', ['label'=>'Заголовок (KZ)']);
            echo $this->Ck->input('text_kz', ['label'=>'Текст (KZ)']);
            echo "<br><br>";

        
            echo $this->Form->control('img',['type'=>'hidden']);
            echo $this->Form->control('file',['type'=>'file','label'=>'Картинка']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
