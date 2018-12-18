<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usabilidade $usabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usabilidade'), ['action' => 'edit', $usabilidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usabilidade'), ['action' => 'delete', $usabilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usabilidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usabilidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usabilidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usabilidades view large-9 medium-8 columns content">
    <h3><?= h($usabilidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $usabilidade->has('empresa') ? $this->Html->link($usabilidade->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $usabilidade->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usabilidade->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('U1') ?></h4>
        <?= $this->Text->autoParagraph(h($usabilidade->u1)); ?>
    </div>
    <div class="row">
        <h4><?= __('U2') ?></h4>
        <?= $this->Text->autoParagraph(h($usabilidade->u2)); ?>
    </div>
    <div class="row">
        <h4><?= __('U3') ?></h4>
        <?= $this->Text->autoParagraph(h($usabilidade->u3)); ?>
    </div>
    <div class="row">
        <h4><?= __('U4') ?></h4>
        <?= $this->Text->autoParagraph(h($usabilidade->u4)); ?>
    </div>
    <div class="row">
        <h4><?= __('U5') ?></h4>
        <?= $this->Text->autoParagraph(h($usabilidade->u5)); ?>
    </div>
</div>
