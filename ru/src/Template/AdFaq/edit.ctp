<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdFaq $adFaq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adFaq->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adFaq->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ad Faq'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adFaq form large-9 medium-8 columns content">
    <?= $this->Form->create($adFaq) ?>
    <fieldset>
        <legend><?= __('Edit Ad Faq') ?></legend>
        <?php
            echo $this->Form->control('date_post');
            echo $this->Form->control('fio');
            echo $this->Form->control('q');
            echo $this->Form->control('a');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
