<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionalidade $funcionalidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funcionalidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $funcionalidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Funcionalidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionalidades form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionalidade) ?>
    <fieldset>
        <legend><?= __('Edit Funcionalidade') ?></legend>
        <?php
            echo $this->Form->control('fu1');
            echo $this->Form->control('fu2');
            echo $this->Form->control('fu3');
            echo $this->Form->control('fu4');
            echo $this->Form->control('fu5');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
