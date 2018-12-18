<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seguridade $seguridade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Seguridade'), ['action' => 'edit', $seguridade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seguridade'), ['action' => 'delete', $seguridade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seguridade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seguridades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seguridade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seguridades view large-9 medium-8 columns content">
    <h3><?= h($seguridade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $seguridade->has('empresa') ? $this->Html->link($seguridade->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $seguridade->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($seguridade->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('S1') ?></h4>
        <?= $this->Text->autoParagraph(h($seguridade->s1)); ?>
    </div>
    <div class="row">
        <h4><?= __('S2') ?></h4>
        <?= $this->Text->autoParagraph(h($seguridade->s2)); ?>
    </div>
    <div class="row">
        <h4><?= __('S3') ?></h4>
        <?= $this->Text->autoParagraph(h($seguridade->s3)); ?>
    </div>
    <div class="row">
        <h4><?= __('S4') ?></h4>
        <?= $this->Text->autoParagraph(h($seguridade->s4)); ?>
    </div>
    <div class="row">
        <h4><?= __('S5') ?></h4>
        <?= $this->Text->autoParagraph(h($seguridade->s5)); ?>
    </div>
</div>
