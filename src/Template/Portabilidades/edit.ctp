<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portabilidade $portabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $portabilidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $portabilidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Portabilidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portabilidades form large-9 medium-8 columns content">
    <?= $this->Form->create($portabilidade) ?>
    <fieldset>
        <legend><?= __('Edit Portabilidade') ?></legend>
        <?php
            echo $this->Form->control('p1');
            echo $this->Form->control('p2');
            echo $this->Form->control('p3');
            echo $this->Form->control('p4');
            echo $this->Form->control('p5');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
