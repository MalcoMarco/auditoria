<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portabilidade[]|\Cake\Collection\CollectionInterface $portabilidades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Portabilidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portabilidades index large-9 medium-8 columns content">
    <h3><?= __('Portabilidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($portabilidades as $portabilidade): ?>
            <tr>
                <td><?= $this->Number->format($portabilidade->id) ?></td>
                <td><?= $portabilidade->has('empresa') ? $this->Html->link($portabilidade->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $portabilidade->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $portabilidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $portabilidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $portabilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portabilidade->id)]) ?>
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
