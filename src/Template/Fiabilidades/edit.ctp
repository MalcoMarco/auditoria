<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fiabilidade $fiabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fiabilidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fiabilidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fiabilidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fiabilidades form large-9 medium-8 columns content">
    <?= $this->Form->create($fiabilidade) ?>
    <fieldset>
        <legend><?= __('Edit Fiabilidade') ?></legend>
        <?php
            echo $this->Form->control('fi1');
            echo $this->Form->control('fi2');
            echo $this->Form->control('fi3');
            echo $this->Form->control('fi4');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
