<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usabilidade $usabilidade
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">USABILIDADES</a></h1>
            </li>
        </ul>
</nav>
<div class="container clearfix">
<div class="usabilidades form large-12 medium-12 columns content">
    <?= $this->Form->create($usabilidade) ?>
    <fieldset>
        <legend><?= __('Usabilidades') ?></legend>
        <?php
                echo $this->Form->input('u1', 
                    [
                        'value' => 'Permite al usuario entender si el software es adecuado y cómo puede ser usado para unas tareas o condiciones de uso particulares',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Permite al usuario entender si el software es adecuado y cómo puede ser usado para unas tareas o condiciones de uso particulares']
                    ]);

                echo $this->Form->input('u2', 
                    [
                        'value' => 'Permite al usuario aprender sobre su aplicación',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Permite al usuario aprender sobre su aplicación']
                    ]);

                echo $this->Form->input('u3', 
                    [
                        'value' => 'Permite al usuario operarlo y controlarlo',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Permite al usuario operarlo y controlarlo']
                    ]);

                echo $this->Form->input('u4', 
                    [
                        'value' => 'Es atractivo al usuario',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Es atractivo al usuario']
                    ]);

                echo $this->Form->input('u5', 
                    [
                        'value' => 'Capacidad de adherirse a normas, convenciones o regulaciones relacionadas con la usabilidad',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Capacidad de adherirse a normas, convenciones o regulaciones relacionadas con la usabilidad']
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
