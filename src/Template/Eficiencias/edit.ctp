<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Eficiencia $eficiencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $eficiencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $eficiencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Eficiencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eficiencias form large-9 medium-8 columns content">
    <?= $this->Form->create($eficiencia) ?>
    <fieldset>
        <legend><?= __('Edit Eficiencia') ?></legend>
        <?php
            echo $this->Form->control('e1');
            echo $this->Form->control('e2');
            echo $this->Form->control('e3');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
