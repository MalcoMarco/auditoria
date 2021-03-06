<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usabilidade[]|\Cake\Collection\CollectionInterface $usabilidades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usabilidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usabilidades index large-9 medium-8 columns content">
    <h3><?= __('Usabilidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usabilidades as $usabilidade): ?>
            <tr>
                <td><?= $this->Number->format($usabilidade->id) ?></td>
                <td><?= $usabilidade->has('empresa') ? $this->Html->link($usabilidade->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $usabilidade->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usabilidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usabilidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usabilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usabilidade->id)]) ?>
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
