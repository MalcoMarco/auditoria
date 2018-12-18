<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Eficiencias'), ['controller' => 'Eficiencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Eficiencia'), ['controller' => 'Eficiencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fiabilidades'), ['controller' => 'Fiabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fiabilidade'), ['controller' => 'Fiabilidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funcionalidades'), ['controller' => 'Funcionalidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcionalidade'), ['controller' => 'Funcionalidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mantenibilidades'), ['controller' => 'Mantenibilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mantenibilidade'), ['controller' => 'Mantenibilidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Portabilidades'), ['controller' => 'Portabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portabilidade'), ['controller' => 'Portabilidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seguridades'), ['controller' => 'Seguridades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seguridade'), ['controller' => 'Seguridades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usabilidades'), ['controller' => 'Usabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usabilidade'), ['controller' => 'Usabilidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empresas form large-9 medium-8 columns content">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Edit Empresa') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('ruc');
            echo $this->Form->control('direccion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
