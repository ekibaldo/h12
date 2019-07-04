<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serv[]|\Cake\Collection\CollectionInterface $servs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Добавить услугу'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Список отделений'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Добавить отделение'), ['controller' => 'States', 'action' => 'add']) ?></li>
    
        <li>
<?php
if ($this->request->is('post')) {
    $servs_data = $this->request->data("servs");
    file_put_contents("../../globals/servs.txt",  $servs_data);
}
?>



            <hr>
            <form action="/ru/servs/" method="POST">
                <label><b>Тип услуг</b></label>    
                <textarea name="servs" rows="10"><?= file_get_contents("../../globals/servs.txt") ?></textarea>
                <br>
                <button>Сохранить</button>
            </form>
        </li>

    </ul>
</nav>
<div class="servs index large-9 medium-8 columns content">
    <h3><?= __('Servs') ?></h3>

    <form action="/ru/servs/" method="GET">
        <input type="text" name="search">
        <button>Найти</button>
    </form>

    <hr>

   

    <hr>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('название') ?></th>
                <th scope="col"><?= $this->Paginator->sort('тип') ?></th>
                <th scope="col"><?= $this->Paginator->sort('цены') ?></th>
                <th scope="col"><?= $this->Paginator->sort('отделение') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servs as $serv): ?>
            <tr>
                <td><?= $this->Number->format($serv->id) ?></td>
                <td><?= h($serv->name) ?></td>
                <td><?= h($serv->type) ?></td>
                <td><?= $this->Number->format($serv->price) ?></td>
                <td><?= $serv->has('state') ? $this->Html->link($serv->state->name, ['controller' => 'States', 'action' => 'view', $serv->state->id]) : '' ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serv->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serv->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
