<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdReview $adReview
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adReview->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adReview->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ad Reviews'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adReviews form large-9 medium-8 columns content">
    <?= $this->Form->create($adReview) ?>
    <fieldset>
        <legend><?= __('Edit Ad Review') ?></legend>
        <?php
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('fio');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('message');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
