<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Seguridade $seguridade
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">SEGURIDADES</a></h1>
            </li>
        </ul>
</nav>
<div class="container clearfix">
<div class="seguridades form large-12 medium-12 columns content">
    <?= $this->Form->create($seguridade) ?>
    <fieldset>
        <legend><?= __('Seguridades') ?></legend>
        <?php
                echo $this->Form->input('s1', 
                    [
                        'value' => 'Logra niveles aceptables de daño a las personas, negocios, software, bienes o el entorno en un contexto de uso especifico',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Logra niveles aceptables de daño a las personas, negocios, software, bienes o el entorno en un contexto de uso especifico']
                    ]);

                echo $this->Form->input('s2', 
                    [
                        'value' => 'Capacidad de autentificación de los usuarios',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Capacidad de autentificación de los usuarios']
                    ]);

                echo $this->Form->input('s3', 
                    [
                        'value' => 'Condidencialidad de datos',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'LCondidencialidad de datos']
                    ]);

                echo $this->Form->input('s4', 
                    [
                        'value' => 'Integridad de los datos',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Integridad de los datos']
                    ]);

                echo $this->Form->input('s5', 
                    [
                        'value' => 'Asignación de funcionalidades a los usuarios',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Asignación de funcionalidades a los usuarios']
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
