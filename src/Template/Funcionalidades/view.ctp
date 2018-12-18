<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionalidade $funcionalidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funcionalidade'), ['action' => 'edit', $funcionalidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funcionalidade'), ['action' => 'delete', $funcionalidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionalidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Funcionalidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionalidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionalidades view large-9 medium-8 columns content">
    <h3><?= h($funcionalidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $funcionalidade->has('empresa') ? $this->Html->link($funcionalidade->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $funcionalidade->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcionalidade->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Fu1') ?></h4>
        <?= $this->Text->autoParagraph(h($funcionalidade->fu1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fu2') ?></h4>
        <?= $this->Text->autoParagraph(h($funcionalidade->fu2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fu3') ?></h4>
        <?= $this->Text->autoParagraph(h($funcionalidade->fu3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fu4') ?></h4>
        <?= $this->Text->autoParagraph(h($funcionalidade->fu4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fu5') ?></h4>
        <?= $this->Text->autoParagraph(h($funcionalidade->fu5)); ?>
    </div>
</div>
