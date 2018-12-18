<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compatitibilidade $compatitibilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compatitibilidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compatitibilidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Compatitibilidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="compatitibilidades form large-9 medium-8 columns content">
    <?= $this->Form->create($compatitibilidade) ?>
    <fieldset>
        <legend><?= __('Edit Compatitibilidade') ?></legend>
        <?php
            echo $this->Form->control('c1');
            echo $this->Form->control('c2');
            echo $this->Form->control('c3');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
