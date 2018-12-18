<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usabilidade $usabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usabilidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usabilidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usabilidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usabilidades form large-9 medium-8 columns content">
    <?= $this->Form->create($usabilidade) ?>
    <fieldset>
        <legend><?= __('Edit Usabilidade') ?></legend>
        <?php
            echo $this->Form->control('u1');
            echo $this->Form->control('u2');
            echo $this->Form->control('u3');
            echo $this->Form->control('u4');
            echo $this->Form->control('u5');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
