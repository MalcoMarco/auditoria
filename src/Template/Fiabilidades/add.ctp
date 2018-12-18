<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fiabilidade $fiabilidade
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">FIABILIDADES</a></h1>
            </li>
        </ul>
</nav>
<div class="container clearfix">
<div class="fiabilidades form large-12 medium-12 columns content">
    <?= $this->Form->create($fiabilidade) ?>
    <fieldset>
        <legend><?= __('Fiabilidades') ?></legend>
        <?php
                echo $this->Form->input('fi1', 
                    [
                        'value' => 'Evita fallar como resultado de fallos en el software',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Evita fallar como resultado de fallos en el software']
                    ]);

                echo $this->Form->input('fi2', 
                    [
                        'value' => 'Mantiene un nivel especificado de prestaciones de fallos de software o de infringir sus interfaces especificados',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Mantiene un nivel especificado de prestaciones de fallos de software o de infringir sus interfaces especificados']
                    ]);

                echo $this->Form->input('fi3', 
                    [
                        'value' => 'Reestablece un nivel de prestaciones especificados y de recuperar los datos direcctamente afectados en caso de fallo',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Reestablece un nivel de prestaciones especificados y de recuperar los datos direcctamente afectados en caso de fallo']
                    ]);

                echo $this->Form->input('fi4', 
                    [
                        'value' => 'Capacidad de adherirse a normas, convenciones o regulaciones relacionadas con la fiabilidad',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Capacidad de adherirse a normas, convenciones o regulaciones relacionadas con la fiabilidad']
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
