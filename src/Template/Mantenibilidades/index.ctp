<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mantenibilidade[]|\Cake\Collection\CollectionInterface $mantenibilidades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mantenibilidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mantenibilidades index large-9 medium-8 columns content">
    <h3><?= __('Mantenibilidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mantenibilidades as $mantenibilidade): ?>
            <tr>
                <td><?= $this->Number->format($mantenibilidade->id) ?></td>
                <td><?= $mantenibilidade->has('empresa') ? $this->Html->link($mantenibilidade->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $mantenibilidade->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mantenibilidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mantenibilidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mantenibilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mantenibilidade->id)]) ?>
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
