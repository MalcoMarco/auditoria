<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Eficiencia $eficiencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Eficiencia'), ['action' => 'edit', $eficiencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Eficiencia'), ['action' => 'delete', $eficiencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eficiencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Eficiencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Eficiencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eficiencias view large-9 medium-8 columns content">
    <h3><?= h($eficiencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $eficiencia->has('empresa') ? $this->Html->link($eficiencia->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $eficiencia->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($eficiencia->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('E1') ?></h4>
        <?= $this->Text->autoParagraph(h($eficiencia->e1)); ?>
    </div>
    <div class="row">
        <h4><?= __('E2') ?></h4>
        <?= $this->Text->autoParagraph(h($eficiencia->e2)); ?>
    </div>
    <div class="row">
        <h4><?= __('E3') ?></h4>
        <?= $this->Text->autoParagraph(h($eficiencia->e3)); ?>
    </div>
</div>
