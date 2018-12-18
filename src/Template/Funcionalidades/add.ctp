<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionalidade $funcionalidade
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">FUNCIONALIDADES</a></h1>
            </li>
        </ul>
</nav>
<div class="container clearfix">
<div class="funcionalidades form large-12 medium-12 columns content">
    <?= $this->Form->create($funcionalidade) ?>
    <fieldset>
        <legend><?= __('Funcionalidades') ?></legend>
        <?php
                echo $this->Form->input('fu1', 
                    [
                        'value' => 'Proporciona un conjunto apropiado de funciones para tareas y objetivos de usuarios especificados',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Proporciona un conjunto apropiado de funciones para tareas y objetivos de usuarios especificados']
                    ]);

                echo $this->Form->input('fu2', 
                    [
                        'value' => 'Proporciona los resultados o efectos correctos o acordados, coon el grado necesario de precisión',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Proporciona los resultados o efectos correctos o acordados, coon el grado necesario de precisión']
                    ]);

                echo $this->Form->input('fu3', 
                    [
                        'value' => 'Interactuar con uno o más sistemas especificados',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Interactuar con uno o más sistemas especificados']
                    ]);

                echo $this->Form->input('fu4', 
                    [
                        'value' => 'Protege la información y datos de manera que las personas o sistemas autorizados no puedan leerlos o modificarlos, al tiempo que no se deniega el acceso a las personas o sistemas autorizados',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Protege la información y datos de manera que las personas o sistemas autorizados no puedan leerlos o modificarlos, al tiempo que no se deniega el acceso a las personas o sistemas autorizados']
                    ]);

                echo $this->Form->input('fu5', 
                    [
                        'value' => 'Adheriré a normas, convenciones o regulaciones en leyes y prescripciones similares relacionadas con funcionabilidad',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Adheriré a normas, convenciones o regulaciones en leyes y prescripciones similares relacionadas con funcionabilidad']
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
