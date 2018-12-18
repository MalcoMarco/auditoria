<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compatitibilidade $compatitibilidade
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">COMPATITIBILIDADES</a></h1>
            </li>
        </ul>
</nav>
<div class="container clearfix">
<div class="compatitibilidades form large-12 medium-12 columns content">
    <?= $this->Form->create($compatitibilidade) ?>
    <fieldset>
        <legend><?= __('Compatitibilidades') ?></legend>
         <?php
                echo $this->Form->input('c1', 
                    [
                        'value' => 'Tiene la capacidad de coexistencia',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Tiene la capacidad de coexistencia']
                    ]);

                echo $this->Form->input('c2', 
                    [
                        'value' => 'Intercambia información con otro software',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Intercambia información con otro software']
                    ]);

                echo $this->Form->input('c3', 
                    [
                        'value' => 'Lleva a cabo sus funciones requeridas cuando comparten el mismo entorno hardware y software',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Lleva a cabo sus funciones requeridas cuando comparten el mismo entorno hardware y software']
                    ]);

            ?>
            
        <?php
        $ultimo = "";
        foreach ($empresas as $empresa) {
            $ultimo = $empresa->id;
        }
            echo $this->Form->input('empresa_id', ['type' => 'hidden','value' => $ultimo]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
