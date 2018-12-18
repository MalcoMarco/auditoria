<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seguridade $seguridade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $seguridade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $seguridade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Seguridades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="seguridades form large-9 medium-8 columns content">
    <?= $this->Form->create($seguridade) ?>
    <fieldset>
        <legend><?= __('Edit Seguridade') ?></legend>
        <?php
            echo $this->Form->control('s1');
            echo $this->Form->control('s2');
            echo $this->Form->control('s3');
            echo $this->Form->control('s4');
            echo $this->Form->control('s5');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
