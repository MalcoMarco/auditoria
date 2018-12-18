<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fiabilidade $fiabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fiabilidade'), ['action' => 'edit', $fiabilidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fiabilidade'), ['action' => 'delete', $fiabilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fiabilidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fiabilidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fiabilidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fiabilidades view large-9 medium-8 columns content">
    <h3><?= h($fiabilidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $fiabilidade->has('empresa') ? $this->Html->link($fiabilidade->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $fiabilidade->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fiabilidade->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Fi1') ?></h4>
        <?= $this->Text->autoParagraph(h($fiabilidade->fi1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fi2') ?></h4>
        <?= $this->Text->autoParagraph(h($fiabilidade->fi2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fi3') ?></h4>
        <?= $this->Text->autoParagraph(h($fiabilidade->fi3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fi4') ?></h4>
        <?= $this->Text->autoParagraph(h($fiabilidade->fi4)); ?>
    </div>
</div>
