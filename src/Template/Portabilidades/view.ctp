<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portabilidade $portabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Portabilidade'), ['action' => 'edit', $portabilidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Portabilidade'), ['action' => 'delete', $portabilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portabilidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Portabilidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portabilidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="portabilidades view large-9 medium-8 columns content">
    <h3><?= h($portabilidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $portabilidade->has('empresa') ? $this->Html->link($portabilidade->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $portabilidade->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($portabilidade->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('P1') ?></h4>
        <?= $this->Text->autoParagraph(h($portabilidade->p1)); ?>
    </div>
    <div class="row">
        <h4><?= __('P2') ?></h4>
        <?= $this->Text->autoParagraph(h($portabilidade->p2)); ?>
    </div>
    <div class="row">
        <h4><?= __('P3') ?></h4>
        <?= $this->Text->autoParagraph(h($portabilidade->p3)); ?>
    </div>
    <div class="row">
        <h4><?= __('P4') ?></h4>
        <?= $this->Text->autoParagraph(h($portabilidade->p4)); ?>
    </div>
    <div class="row">
        <h4><?= __('P5') ?></h4>
        <?= $this->Text->autoParagraph(h($portabilidade->p5)); ?>
    </div>
</div>
