<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">EMPRESA</a></h1>
            </li>
        </ul>
</nav>
<div class="container clearfix">
        <div class="empresas form large-12 medium-12 columns content">
            <?= $this->Form->create($empresa) ?>
            <fieldset>
                <legend><?= __('Registrar Empresa') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('ruc');
                    echo $this->Form->control('direccion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Registrar')) ?>
            <?= $this->Form->end() ?>
        </div>
</div>

