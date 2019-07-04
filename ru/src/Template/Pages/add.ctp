<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pages form large-9 medium-8 columns content">
    <?= $this->Form->create($page) ?>
    <fieldset>
        <legend><?= __('Add Page') ?></legend>

        <label><b>Категория</b></label>
        <select name="category_id" id="category-id" required="">
        <?php
            foreach ($categories as $category) {
                //$category_id[] = $category->id;
                //$category_title[] = $category->title_ru;
                ?>
                    <option value="<?= $category->id ?>"><?= $category->title_ru ?></option>
                <?
            }
        ?>
        </select>
        <?php
            //echo $this->Form->control('category_id',  ['options' => $category_title]);
            echo $this->Form->control('title_ru', ['label'=>'Заголовок RU']);
            echo $this->Ck->input('text_ru', ['label'=>'Текст RU']);
            echo "<br><br>";
            echo $this->Form->control('title_kz', ['label'=>'Заголовок KZ']);
            echo $this->Ck->input('text_kz',['label'=>'Текст KZ']);
            echo "<br><br>";
            echo $this->Form->control('menu', ['label'=>'Включить в меню']);
            echo $this->Form->control('position', ['label'=>'Позиция']);
            echo $this->Form->control('link_ru', ['label'=>'Ссылка на другую страницу RU','required'=>false]);
            echo $this->Form->control('link_kz', ['label'=>'Ссылка  на другую страницу KZ','required'=>false]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
