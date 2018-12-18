<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compatitibilidade $compatitibilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compatitibilidade'), ['action' => 'edit', $compatitibilidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compatitibilidade'), ['action' => 'delete', $compatitibilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compatitibilidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Compatitibilidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compatitibilidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="compatitibilidades view large-9 medium-8 columns content">
    <h3><?= h($compatitibilidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $compatitibilidade->has('empresa') ? $this->Html->link($compatitibilidade->empresa->nombre, ['controller' => 'Empresas', 'action' => 'view', $compatitibilidade->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($compatitibilidade->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('C1') ?></h4>
        <?= $this->Text->autoParagraph(h($compatitibilidade->c1)); ?>
    </div>
    <div class="row">
        <h4><?= __('C2') ?></h4>
        <?= $this->Text->autoParagraph(h($compatitibilidade->c2)); ?>
    </div>
    <div class="row">
        <h4><?= __('C3') ?></h4>
        <?= $this->Text->autoParagraph(h($compatitibilidade->c3)); ?>
    </div>
</div>
