<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Eficiencia $eficiencia
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">EFICIENCIAS</a></h1>
            </li>
        </ul>
</nav>
<div class="container clearfix">
<div class="eficiencias form large-12 medium-12 columns content">
    <?= $this->Form->create($eficiencia) ?>
    <fieldset>
        <legend><?= __('Eficiencias') ?></legend>
        <?php
                echo $this->Form->input('e1', 
                    [
                        'value' => 'Proporciona tiempos de respuesta, tiempo de proceso y potencia apropiados, bajo condiciones determinadas',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Proporciona tiempos de respuesta, tiempo de proceso y potencia apropiados, bajo condiciones determinadas']
                    ]);

                echo $this->Form->input('e2', 
                    [
                        'value' => 'Usa las cantidades y tipos de recursos adecuados cuando el software lleva a cabo su función bajo condiciones determinadas',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Usa las cantidades y tipos de recursos adecuados cuando el software lleva a cabo su función bajo condiciones determinadas']
                    ]);

                echo $this->Form->input('e3', 
                    [
                        'value' => 'Capacidad para adherirse a normas o convenciones relacionadas con la eficiencia',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Capacidad para adherirse a normas o convenciones relacionadas con la eficiencia']
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
