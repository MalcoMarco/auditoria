<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mantenibilidade $mantenibilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mantenibilidade'), ['action' => 'edit', $mantenibilidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mantenibilidade'), ['action' => 'delete', $mantenibilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mantenibilidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mantenibilidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mantenibilidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mantenibilidades view large-9 medium-8 columns content">
    <h3><?= h($mantenibilidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $mantenibilidade->has('empresa') ? $this->Html->link($mantenibilidade->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $mantenibilidade->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mantenibilidade->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('M1') ?></h4>
        <?= $this->Text->autoParagraph(h($mantenibilidade->m1)); ?>
    </div>
    <div class="row">
        <h4><?= __('M2') ?></h4>
        <?= $this->Text->autoParagraph(h($mantenibilidade->m2)); ?>
    </div>
    <div class="row">
        <h4><?= __('M3') ?></h4>
        <?= $this->Text->autoParagraph(h($mantenibilidade->m3)); ?>
    </div>
    <div class="row">
        <h4><?= __('M4') ?></h4>
        <?= $this->Text->autoParagraph(h($mantenibilidade->m4)); ?>
    </div>
    <div class="row">
        <h4><?= __('M5') ?></h4>
        <?= $this->Text->autoParagraph(h($mantenibilidade->m5)); ?>
    </div>
</div>
