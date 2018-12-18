<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mantenibilidade $mantenibilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mantenibilidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mantenibilidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mantenibilidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mantenibilidades form large-9 medium-8 columns content">
    <?= $this->Form->create($mantenibilidade) ?>
    <fieldset>
        <legend><?= __('Edit Mantenibilidade') ?></legend>
        <?php
            echo $this->Form->control('m1');
            echo $this->Form->control('m2');
            echo $this->Form->control('m3');
            echo $this->Form->control('m4');
            echo $this->Form->control('m5');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
