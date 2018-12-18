<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mantenibilidade $mantenibilidade
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">MANTENIBILIDADES</a></h1>
            </li>
        </ul>
</nav>
<div class="container clearfix">
<div class="mantenibilidades form large-12 medium-12 columns content">
    <?= $this->Form->create($mantenibilidade) ?>
    <fieldset>
        <legend><?= __('Mantenibilidades') ?></legend>
        
            <?php
                echo $this->Form->input('m1', 
                    [
                        'value' => 'Tiene la Capacidad para serle diagnosticadas las deficiencias o causas de los fallos en el software, o para indentificar las partes que han de ser modificadas',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Tiene la Capacidad para serle diagnosticadas las deficiencias o causas de los fallos en el software, o para indentificar las partes que han de ser modificadas']
                    ]);

                echo $this->Form->input('m2', 
                    [
                        'value' => 'Permite que una determinada modificación sea implementada',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Permite que una determinada modificación sea implementada']
                    ]);

                echo $this->Form->input('m3', 
                    [
                        'value' => 'Evita efectos inesperados debidos a modificaciones de software',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Evita efectos inesperados debidos a modificaciones de software']
                    ]);

                echo $this->Form->input('m4', 
                    [
                        'value' => 'Permite que el software modificado sea validado',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Permite que el software modificado sea validado']
                    ]);

                echo $this->Form->input('m5', 
                    [
                        'value' => 'Tiene la capacidad para adherirse a normas o convenciones relacionadas con la mantenibilidad',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Tiene la capacidad para adherirse a normas o convenciones relacionadas con la mantenibilidad']
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
